<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DonationController extends Controller
{
    private $paystackSecret;
    private $paystackUrl = 'https://api.paystack.co';

    public function __construct()
    {
        $this->paystackSecret = env('PAYSTACK_SECRET_KEY', 'sk_test_placeholder');
    }

    public function process(Request $request)
    {
        $request->validate([
            'project' => 'required|string',
            'amount' => 'required|numeric|min:100',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Find or create user for the donation
        $user = User::firstOrCreate(
            ['email' => $request->email],
            [
                'name' => $request->name,
                'password' => Hash::make(Str::random(16))
            ]
        );

        $reference = 'DON_' . uniqid() . '_' . time();

        // Create Pending Transaction
        Transaction::create([
            'user_id' => $user->id,
            'reference' => $reference,
            'amount' => $request->amount,
            'status' => 'Pending',
            'metadata' => [
                'project' => $request->project,
                'type' => 'Donation'
            ]
        ]);

        // Initialize Paystack Payment
        $response = Http::withToken($this->paystackSecret)
            ->post("{$this->paystackUrl}/transaction/initialize", [
                'email' => $user->email,
                'amount' => $request->amount * 100, 
                'reference' => $reference,
                'callback_url' => route('donation.verify'),
                'metadata' => [
                    'project' => $request->project,
                    'type' => 'Donation'
                ]
            ]);

        if ($response->successful() && $response->json('status')) {
            return redirect($response->json('data.authorization_url'));
        }

        return back()->with('error', 'Unable to initialize donation payment. Please try again.');
    }

    public function verify(Request $request)
    {
        $reference = $request->query('reference');

        if (!$reference) {
            return redirect('/support')->with('error', 'No payment reference provided.');
        }

        $response = Http::withToken($this->paystackSecret)
            ->get("{$this->paystackUrl}/transaction/verify/{$reference}");

        if ($response->successful() && $response->json('data.status') === 'success') {
            $transaction = Transaction::where('reference', $reference)->first();
            if ($transaction) {
                $transaction->update([
                    'status' => 'Success',
                    'metadata' => $response->json('data')
                ]);
            }
            return redirect()->route('membership.success', ['reference' => $reference]);
        }

        return redirect('/support')->with('error', 'Donation payment verification failed.');
    }
}
