@extends('layouts.app')

@section('title', 'Free Surgeries - Network for Medical Missions')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Free Surgeries</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Programs</li>
                <li><span>/</span></li>
                <li>Free Surgeries</li>
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
                        <img src="{{ asset('assets/images/resources/causes-details-img.jpg') }}" alt="Free Surgeries">
                    </div>
                    <div class="causes-details__text-box">
                        <h3>Available Surgical Treatments</h3>
                        <p class="causes-details__text-1">Through our network of volunteer medical professionals and partner hospitals, we offer life-changing surgical procedures to those who cannot afford them.</p>
                        
                        <ul class="list-unstyled causes-details__list mt-4">
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                <div class="text"><p><strong>General Surgery</strong> - Comprehensive procedures for common ailments.</p></div>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                <div class="text"><p><strong>Gynaecological Surgery</strong> - Specialized care for women's reproductive health.</p></div>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                <div class="text"><p><strong>Pediatric Surgery</strong> - Delicate surgical interventions tailored for children.</p></div>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                <div class="text"><p><strong>Urological Surgery</strong> - Treatment for disorders of the urinary tract and male reproductive system.</p></div>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                <div class="text"><p><strong>Orthopedic Surgery</strong> - Restoring mobility through musculoskeletal interventions.</p></div>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                <div class="text"><p><strong>Eye Surgery</strong> - Restoring vision through cataract removals and other ocular procedures.</p></div>
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
