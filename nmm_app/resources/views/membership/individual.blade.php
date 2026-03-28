@extends('layouts.app')

@section('title', 'Individual Membership - Network for Medical Missions')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Individual Membership</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Membership</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Become Volunteer Start-->
<section class="become-volunteer">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="become-volunteer__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Join NMM</span>
                        <h2 class="section-title__title">Become an Individual Member</h2>
                    </div>
                    <p class="become-volunteer__text">Individual Membership is open to all who wish to support our mission and stay updated with our impact globally.</p>
                    <div class="become-volunteer__big-text">
                        <h2>Benefits Include:</h2>
                    </div>
                    <ul class="list-unstyled become-volunteer__list">
                        <li>
                            <div class="icon"><i class="fas fa-arrow-circle-right"></i></div>
                            <div class="text"><p>Regular Newsletter Updates</p></div>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-arrow-circle-right"></i></div>
                            <div class="text"><p>Invitations to Special Events</p></div>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-arrow-circle-right"></i></div>
                            <div class="text"><p>Networking with a Purpose</p></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="become-volunteer__right">
                    <form action="{{ route('membership.individual.process') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="nmm-input">
                                    <input type="text" placeholder="Full Name" name="name" required>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="nmm-input">
                                    <input type="email" placeholder="Email Address" name="email" required>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="nmm-input">
                                    <input type="text" placeholder="Phone Number" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="nmm-input">
                                    <textarea name="message" placeholder="Briefly tell us why you want to join"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <p class="mb-3 text-muted">Amount Due: <strong>NGN 20,000.00</strong> (Annual)</p>
                                <button type="submit" class="nmm-btn">
                                    <i class="fas fa-arrow-circle-right"></i> Pay & Register via Paystack
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Become Volunteer End-->
@endsection
