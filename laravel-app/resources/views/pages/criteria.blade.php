@extends('layouts.app')

@section('title', 'Selection Criteria - Network for Medical Missions')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Selection Criteria</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li>About Us</li>
                <li><span>/</span></li>
                <li>Selection Criteria</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!-- Criteria Section Start -->
<section class="causes-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto col-lg-10">
                <div class="causes-details__text-box text-center mb-5">
                    <div class="section-title text-center">
                        <span class="section-title__tagline">Partner With Us</span>
                        <h2 class="section-title__title">Criteria for Beneficiary & Partner Selection</h2>
                    </div>
                    <p class="causes-details__text-1">The Network for Medical Missions operates through its partner organizations, institutes, and hospitals to help those who cannot afford to pay for their treatments including surgical procedures. We look forward to more strategic partnerships to bring quality health care to an increasing number of indigent, impoverished and vulnerable communities.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- What We Do Support -->
            <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100 shadow-sm border-0" style="border-top: 5px solid var(--thm-blue) !important;">
                    <div class="card-body p-5">
                        <h3 class="mb-4 text-primary"><i class="fas fa-check-circle mr-2"></i> What We Do</h3>
                        <ul class="list-unstyled causes-details__list">
                            <li class="mb-3">
                                <div class="icon"><i class="fas fa-check text-success"></i></div>
                                <div class="text"><p>We support free treatment programmes for families that cannot afford it.</p></div>
                            </li>
                            <li class="mb-3">
                                <div class="icon"><i class="fas fa-check text-success"></i></div>
                                <div class="text"><p>Share costs with partners to maximise support.</p></div>
                            </li>
                            <li class="mb-3">
                                <div class="icon"><i class="fas fa-check text-success"></i></div>
                                <div class="text"><p>Encourage self-sufficiency among our partners.</p></div>
                            </li>
                            <li class="mb-3">
                                <div class="icon"><i class="fas fa-check text-success"></i></div>
                                <div class="text"><p>Regularly monitor and manage all programmes and partners.</p></div>
                            </li>
                            <li class="mb-3">
                                <div class="icon"><i class="fas fa-check text-success"></i></div>
                                <div class="text"><p>Ensure our partners meet the highest safety and quality standards.</p></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- What We Do NOT Support -->
            <div class="col-xl-6 col-lg-6 mb-4">
                <div class="card h-100 shadow-sm border-0" style="border-top: 5px solid var(--thm-purple) !important;">
                    <div class="card-body p-5">
                        <h3 class="mb-4 text-danger"><i class="fas fa-times-circle mr-2"></i> What We Do Not Do</h3>
                        <ul class="list-unstyled causes-details__list">
                            <li class="mb-3">
                                <div class="icon"><i class="fas fa-times text-danger"></i></div>
                                <div class="text"><p>Pay for treatments and services for those who can pay them.</p></div>
                            </li>
                            <li class="mb-3">
                                <div class="icon"><i class="fas fa-times text-danger"></i></div>
                                <div class="text"><p>Pay for procedures that are covered by other organisations (e.g., government, insurance, charities).</p></div>
                            </li>
                            <li class="mb-3">
                                <div class="icon"><i class="fas fa-times text-danger"></i></div>
                                <div class="text"><p>Support organisations that do not offer safe and high-quality care.</p></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 text-center">
            <div class="col-12">
                <h4 class="mb-4 text-uppercase text-muted" style="letter-spacing: 1px;">Join hands with us in improving the health and well-being of people by networking the world for good.</h4>
                <a href="{{ url('/support') }}" class="thm-btn"><i class="fas fa-arrow-circle-right"></i> Become a Partner Today</a>
            </div>
        </div>
    </div>
</section>
<!-- Criteria Section End -->
@endsection
