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
            <div class="col-xl-4 col-lg-5">
                <div class="contact-page__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Contact with us</span>
                        <h2 class="section-title__title">Get in Touch with NMM</h2>
                    </div>
                    <div class="contact-page__contact-info">
                        <ul class="list-unstyled contact-page__contact-list">
                            <li>
                                <div class="icon">
                                    <span class="icon-chat"></span>
                                </div>
                                <div class="text">
                                    <p>Call Anytime</p>
                                    <a href="tel:+2340000000000">+234 000 000 0000</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-message"></span>
                                </div>
                                <div class="text">
                                    <p>Send Email</p>
                                    <a href="mailto:info@networkformedicalmissions.org">info@networkformedicalmissions.org</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-address"></span>
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
            <div class="col-xl-8 col-lg-7">
                <div class="contact-page__right">
                    <form action="#" class="contact-page__form">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="nmm-input">
                                    <input type="text" placeholder="Your Name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="nmm-input">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="nmm-input">
                                    <input type="text" placeholder="Phone Number" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="nmm-input">
                                    <input type="text" placeholder="Subject" name="subject">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="nmm-input">
                                    <textarea name="message" placeholder="Write a Message"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="nmm-btn">
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
