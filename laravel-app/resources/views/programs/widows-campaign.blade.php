@extends('layouts.app')

@section('title', 'Health For Widows Campaign - Network for Medical Missions')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Health For Widows Campaign</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Programs</li>
                <li><span>/</span></li>
                <li>Widows Campaign</li>
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
                        <img src="{{ asset('assets/images/resources/causes-details-images-2.jpg') }}" alt="Health For Widows">
                    </div>
                    <div class="causes-details__text-box">
                        <h3>Health For Widows Campaign</h3>
                        <p class="causes-details__text-1">Widows often face immense vulnerability and lack of access to basic healthcare services. Our Health For Widows Campaign is specifically designed to provide free medical checkups, necessary medications, and continuous health support to widows in impoverished communities.</p>

                        <div class="causes-details__text-box-2">
                            <h4>Supporting the Vulnerable</h4>
                            <p>We believe in James 1:27, aiming to support the most vulnerable among us. By ensuring widows have access to quality healthcare, we aim to improve their quality of life, provide emotional and medical support, and share the love of Christ in a tangible way.</p>
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
