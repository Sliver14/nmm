@extends('layouts.app')

@section('title', 'Contact Us - Network for Medical Missions')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Contact Us</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact-page__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Contact with us</span>
                        <h2 class="section-title__title">Get in Touch with NMM</h2>
                    </div>
                    <div class="contact-page__contact-info">
                        <ul class="list-unstyled contact-page__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="text">
                                    <p>Call Anytime</p>
                                    <a href="tel:+2340000000000">+234 912 710 0302</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <p>Send Email</p>
                                    <a href="mailto:contact@networkformedicalmissions.org">contact@networkformedicalmissions.org</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="text">
                                    <p>Visit Office</p>
                                    <span>Lagos, Nigeria</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="contact-page__right">
                    <form action="{{ route('contact.submit') }}" method="POST" class="contact-page__form">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="nmm-input">
                                    <input type="text" placeholder="Your Name" name="name" value="{{ old('name') }}" required>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="nmm-input">
                                    <input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="nmm-input">
                                    <input type="text" placeholder="Phone Number" name="phone" value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="nmm-input">
                                    <input type="text" placeholder="Subject" name="subject" value="{{ old('subject') }}" required>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="nmm-input">
                                    <textarea name="message" placeholder="Write a Message" required>{{ old('message') }}</textarea>
                                </div>
                            </div>
                            <div class="col-xl-12 text-center">
                                <button type="submit" class="nmm-btn w-100">
                                    <i class="fas fa-arrow-circle-right"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->
@endsection
