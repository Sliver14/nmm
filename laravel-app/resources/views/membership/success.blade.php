@extends('layouts.app')

@section('title', 'Payment Successful - Network for Medical Missions')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Payment Successful</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Membership</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<section class="welcome-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="welcome-one__right text-center">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">Congratulations!</span>
                        <h2 class="section-title__title">Your Associate Membership is Active</h2>
                    </div>
                    <div class="welcome-one__heart-icon mb-4" style="position: relative; left: 0; bottom: 0; display: inline-block;">
                        <img src="{{ asset('assets/images/resources/welcome-one-heart-icon.png') }}" alt="">
                    </div>
                    <p class="welcome-one__right-text">Thank you for joining the Network for Medical Missions. Your payment was processed successfully.</p>
                    
                    <div class="card mt-4 mb-5 mx-auto" style="max-width: 600px;">
                        <div class="card-body">
                            <h4 class="mb-3">Transaction Details</h4>
                            <ul class="list-unstyled text-left">
                                <li class="mb-2"><strong>Reference:</strong> {{ $transaction->reference }}</li>
                                <li class="mb-2"><strong>Amount Paid:</strong> NGN {{ number_format($transaction->amount, 2) }}</li>
                                <li class="mb-2"><strong>Status:</strong> <span class="badge badge-success">Success</span></li>
                                <li class="mb-2"><strong>Expiry Date:</strong> {{ $transaction->membership->expiry_date->format('M d, Y') }}</li>
                            </ul>
                        </div>
                    </div>

                    <a href="{{ url('/') }}" class="thm-btn"><i class="fas fa-arrow-circle-right"></i> Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
