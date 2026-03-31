@extends('layouts.app')

@section('title', 'Support Our Projects - Network for Medical Missions')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Support Our Projects</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Support</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Support Start-->
<section class="become-volunteer">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Partner with NMM</span>
                    <h2 class="section-title__title">Support Our Missions</h2>
                    <p class="mt-4">Join hands with us in improving the health and well-being of people by networking the world for good. Your contributions directly support free surgeries, health fairs, and medical outreaches.</p>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-xl-6 col-lg-6">
                <div class="become-volunteer__left h-100 p-5 shadow-sm bg-light">
                    <h3>Project Funding Needs</h3>
                    <ul class="list-unstyled become-volunteer__list mt-4">
                        <li class="mb-4">
                            <div class="icon"><i class="fas fa-heartbeat text-primary"></i></div>
                            <div class="text"><h4>Free Surgeries Fund</h4><p>Covers the cost of surgical supplies and hospital theater fees for indigent patients.</p></div>
                        </li>
                        <li class="mb-4">
                            <div class="icon"><i class="fas fa-prescription-bottle-alt text-primary"></i></div>
                            <div class="text"><h4>Medical Supply Fund</h4><p>Provides essential medicines and clinical supplies for community health fairs.</p></div>
                        </li>
                        <li class="mb-4">
                            <div class="icon"><i class="fas fa-hand-holding-heart text-primary"></i></div>
                            <div class="text"><h4>Widows Health Campaign</h4><p>Ensures vulnerable widows receive regular medical checkups and treatments.</p></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="become-volunteer__right">
                    <div class="card p-4 border-0 shadow">
                        <h4 class="mb-4">Donation / Support Form</h4>
                        <form action="{{ route('donation.process') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="nmm-input">
                                        <select name="project" required>
                                            <option value="" disabled selected>Choose Project to Support</option>
                                            <option value="General Mission Fund">General Mission Fund</option>
                                            <option value="Free Surgeries Program">Free Surgeries Program</option>
                                            <option value="Wound Care Outreaches">Wound Care Outreaches</option>
                                            <option value="Health For Widows">Health For Widows</option>
                                            <option value="Community Health Fairs">Community Health Fairs</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="nmm-input">
                                        <input type="number" name="amount" placeholder="Amount (NGN)" min="100" required>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="nmm-input">
                                        <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="nmm-input">
                                        <input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" class="nmm-btn w-100">
                                        <i class="fas fa-arrow-circle-right"></i> Proceed to Paystack
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Support End-->
@endsection
