@extends('layouts.app')

@section('title', 'Community Health Fairs - Network for Medical Missions')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Community Health Fairs</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Programs</li>
                <li><span>/</span></li>
                <li>Community Health Fairs</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<section class="causes-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="causes-details__left-bar">
                    <div class="causes-details__img">
                        <img src="{{ asset('assets/images/resources/causes-details-img.jpg') }}" alt="Community Health Fairs">
                    </div>
                    <div class="causes-details__text-box">
                        <h3>Comprehensive Community Care</h3>
                        <p class="causes-details__text-1">We host Free Medical Fairs with the aim to provide primary care for minor illnesses, eye and ear clinics, a dedicated NMM prescription assistance program, pharmacy services, and a comprehensive referral system.</p>

                        <div class="causes-details__text-box-2">
                            <h4>Dental Services</h4>
                            <p>Our health fairs also include essential dental services, recognizing the profound impact of oral health on overall wellbeing.</p>
                        </div>

                        <ul class="list-unstyled causes-details__list mt-4">
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                <div class="text"><p>Routine dental exams and assessments</p></div>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                <div class="text"><p>Cavity fillings and preventative care</p></div>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                <div class="text"><p>Professional teeth cleanings</p></div>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                <div class="text"><p>Safe tooth extractions</p></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="causes-details__right">
                    <div class="causes-details__organizer">
                        <div class="causes-details__organizer-img">
                            <img src="{{ asset('assets/images/resources/causes-details-organizar-img-1.jpg') }}" alt="">
                        </div>
                        <div class="causes-details__organizer-content">
                            <p>Program Directed By</p>
                            <h5>Network for Medical Missions</h5>
                            <ul class="causes-details__organizer-list list-unstyled">
                                <li><i class="fas fa-map-marker-alt"></i>Global Secretariat</li>
                                <li><i class="fas fa-envelope"></i>contact@networkformedicalmissions.org</li>
                            </ul>
                        </div>
                    </div>
                    <div class="causes-details__donations">
                        <h3 class="causes-details__donations-title">Support This Program</h3>
                        <a href="{{ url('/support') }}" class="thm-btn w-100 text-center mt-3"><i class="fas fa-heart"></i> Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
