<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Membership;
use App\Models\Transaction;

class MembershipController extends Controller
{
    private $paystackSecret;
    private $paystackUrl = 'https://api.paystack.co';

    public function __construct()
    {
        // Typically stored in .env as PAYSTACK_SECRET_KEY
        $this->paystackSecret = env('PAYSTACK_SECRET_KEY', 'sk_test_placeholder');
    }

    // 1. Show the registration form (Blade view will be created later)
    public function showAssociateForm()
    {
        return view('membership.associate');
    }

    public function showIndividualForm()
    {
        return view('membership.individual');
    }

    // 2. Process Registration & Initialize Paystack Payment
    public function processAssociate(Request $request)
    {
        return $this->processMembership($request, 'Associate', 50000);
    }

    public function processIndividual(Request $request)
    {
        return $this->processMembership($request, 'Individual', 20000);
    }

    private function processMembership(Request $request, $type, $amount)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Find or create user
        $user = User::firstOrCreate(
            ['email' => $request->email],
            [
                'name' => $request->name,
                'password' => Hash::make(Str::random(16))
            ]
        );

        // Create Pending Membership
        $membership = Membership::create([
            'user_id' => $user->id,
            'type' => $type,
            'status' => 'Pending',
        ]);

        $reference = 'NMM_' . uniqid() . '_' . time();

        // Create Pending Transaction
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'membership_id' => $membership->id,
            'reference' => $reference,
            'amount' => $amount,
            'status' => 'Pending',
        ]);

        // Initialize Paystack Payment
        $response = Http::withToken($this->paystackSecret)
            ->post("{$this->paystackUrl}/transaction/initialize", [
                'email' => $user->email,
                'amount' => $amount * 100, 
                'reference' => $reference,
                'callback_url' => route('membership.verify'),
                'metadata' => [
                    'membership_id' => $membership->id,
                    'type' => $type
                ]
            ]);

        if ($response->successful() && $response->json('status')) {
            return redirect($response->json('data.authorization_url'));
        }

        return back()->withError('Unable to initialize payment. Please try again.');
    }

    // 3. Verify Payment (Synchronous Redirect from Paystack)
    public function verifyPayment(Request $request)
    {
        $reference = $request->query('reference');

        if (!$reference) {
            return redirect('/')->withError('No payment reference provided.');
        }

        $response = Http::withToken($this->paystackSecret)
            ->get("{$this->paystackUrl}/transaction/verify/{$reference}");

        if ($response->successful() && $response->json('data.status') === 'success') {
            $this->activateMembership($reference, $response->json('data'));
            return redirect()->route('membership.success', ['reference' => $reference]);
        }

        return redirect('/')->withError('Payment verification failed.');
    }

    // 4. Success Page
    public function successPage(Request $request)
    {
        $reference = $request->query('reference');
        $transaction = Transaction::where('reference', $reference)->firstOrFail();

        return view('membership.success', compact('transaction'));
    }

    // 5. Paystack Webhook (Asynchronous Verification)
    public function webhook(Request $request)
    {
        $payload = $request->getContent();
        $signature = $request->header('x-paystack-signature');

        // Verify Paystack Signature
        if ($signature !== hash_hmac('sha512', $payload, $this->paystackSecret)) {
            Log::warning('Invalid Paystack Webhook Signature detected.');
            abort(401, 'Invalid signature');
        }

        $event = json_decode($payload, true);

        if ($event['event'] === 'charge.success') {
            $reference = $event['data']['reference'];
            $this->activateMembership($reference, $event['data']);
        }

        return response()->json(['status' => 'success'], 200);
    }

    // Helper: Activate Membership & Update Transaction
    private function activateMembership($reference, $paystackData)
    {
        $transaction = Transaction::where('reference', $reference)
            ->where('status', 'Pending')
            ->first();

        if ($transaction) {
            $transaction->update([
                'status' => 'Success',
                'metadata' => $paystackData
            ]);

            $transaction->membership->update([
                'status' => 'Active',
                'expiry_date' => now()->addYear() // 1 Year Associate Membership
            ]);
        }
    }
}
