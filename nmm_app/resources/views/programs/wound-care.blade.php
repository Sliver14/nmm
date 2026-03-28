@extends('layouts.app')

@section('title', 'Wound Care Outreaches - Network for Medical Missions')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Wound Care Outreaches</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Programs</li>
                <li><span>/</span></li>
                <li>Wound Care</li>
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
                        <img src="{{ asset('assets/images/resources/causes-details-images-1.jpg') }}" alt="Wound Care Outreaches">
                    </div>
                    <div class="causes-details__text-box">
                        <h3>Our Approach to Wound Care</h3>
                        <p class="causes-details__text-1">We focus on the provision of access to wound care sessions and health education on self-management techniques to people living with chronic wounds with the aim to improve health outcomes and reduce the risk of amputations.</p>
                        
                        <div class="causes-details__text-box-2">
                            <h4>Training & Workshops</h4>
                            <p>Through this program, we provide comprehensive workshops and training sessions to community health workers on the management of chronic wounds, including the critical care of diabetic foot ulcers.</p>
                        </div>
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
                                <li><i class="fas fa-envelope"></i>info@networkformedicalmissions.org</li>
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
