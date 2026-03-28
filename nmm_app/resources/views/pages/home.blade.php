@extends('layouts.app')

@section('title', 'Home - Network for Medical Missions')

@section('content')
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
     "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
        "delay": 15000
    }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="overflow: hidden;">
                        <!-- Video Background 1: High reliability sample -->
                        <video class="slider-video-bg" autoplay muted loop playsinline>
                            <source src="https://www.shutterstock.com/shutterstock/videos/1016892217/preview/stock-footage-dolly-shot-of-doctor-examining-girl-s-leg-sitting-with-woman-and-checking-reports-in-digital-tablet.webm" type="video/mp4">
                        </video>
                        <div class="image-layer" style="background-color: transparent; display: none;"></div>
                        <div class="image-layer-overlay" style="background-color: rgba(0, 51, 102, 0.5);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="main-slider__content">
                                        <p>Christ for the Hurting Medical Mission Trips</p>
                                        <h2>Networking the World <br> for Good</h2>
                                        <a href="{{ url('/about') }}" class="thm-btn"><i class="fas fa-arrow-circle-right"></i>Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="overflow: hidden;">
                        <!-- Video Background 2: High reliability sample -->
                        <video class="slider-video-bg" autoplay muted loop playsinline>
                            <source src="https://www.shutterstock.com/shutterstock/videos/4006999457/preview/stock-footage-female-dentist-performing-dental-procedure-on-male-patient.webm" type="video/mp4">
                        </video>
                        <div class="image-layer" style="background-color: transparent; display: none;"></div>
                        <div class="image-layer-overlay" style="background-color: rgba(0, 51, 102, 0.5);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="main-slider__content">
                                        <p>Providing Free Surgeries & Medical Services</p>
                                        <h2>Help the Poor <br> in Need</h2>
                                        <a href="{{ url('/programs/free-surgeries') }}" class="thm-btn"><i class="fas fa-arrow-circle-right"></i>Our Programs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="main-slider-pagination" style="display: none !important;"></div>
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i
                            class="icon-right-arrow icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i
                            class="icon-right-arrow"></i>
                    </div>
                </div>
            </div>
        </section>

        <!--Welcome One Start-->
        <section class="welcome-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="welcome-one__left">
                            <div class="welcome-one__img-box">
                                <img src="{{ asset('22.jpeg') }}" alt="">
                                <div class="welcome-one__img-box-2">
                                    <img src="{{ asset('8.jpeg') }}" alt="">
                                </div>
                                <!-- <h2 class="welcome-one__bottom-text">Helping Today</h2> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="welcome-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Welcome to NMM</span>
                                <h2 class="section-title__title">Sharing God's Love Through Medical Care</h2>
                            </div>
                            <p class="welcome-one__right-text">We welcome Christian medical missionaries, health care professionals, partners as well as all those with a passion for providing medical, relief and community support services to hurting people around the world.</p>
                            <div class="welcome-one__our-mission-and-story">
                                <div class="welcome-one__mission-and-story-single">
                                    <h3><i class="fas fa-arrow-circle-right"></i>Our Mission</h3>
                                    <p class="welcome-one__our-mission-and-story-text">To share and promote the knowledge of God’s love through His Son, Jesus Christ, by providing quality healthcare.</p>
                                </div>
                                <div class="welcome-one__mission-and-story-single">
                                    <h3><i class="fas fa-arrow-circle-right"></i>Our Impact</h3>
                                    <p class="welcome-one__our-mission-and-story-text">Fostering community development and Christian missionary impact across nations.</p>
                                </div>
                            </div>
                            <a href="{{ url('/about') }}" class="welcome-one__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Read More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Welcome One End-->

        <!--Three Boxes Start-->
        <section class="three-boxes">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="three-boxes__single">
                            <div class="three-boxes__single-img">
                                <img src="{{ asset('assets/images/resources/three-boxes-img-1.jpg') }}" alt="">
                            </div>
                            <div class="three-boxes__single-content">
                                <h3>Associate Membership</h3>
                                <p>Join our global network of medical professionals.</p>
                                <a href="{{ route('membership.associate.form') }}" class="thm-btn">
                                    <i class="fas fa-arrow-circle-right"></i> Join Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="three-boxes__single three-boxes__single-2">
                            <div class="three-boxes__single-img">
                                <img src="{{ asset('assets/images/resources/three-boxes-img-1.jpg') }}" alt="">
                            </div>
                            <div class="three-boxes__single-content">
                                <h3>Become a Volunteer</h3>
                                <p>Lend your skills to help those in need.</p>
                                <a href="{{ url('/volunteers') }}" class="thm-btn">
                                    <i class="fas fa-arrow-circle-right"></i> Apply Today
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="three-boxes__single three-boxes__single-3">
                            <div class="three-boxes__single-img">
                                <img src="{{ asset('assets/images/resources/three-boxes-img-1.jpg') }}" alt="">
                            </div>
                            <div class="three-boxes__single-content">
                                <h3>Partner with Us</h3>
                                <p>Support our projects and expand our reach.</p>
                                <a href="{{ url('/support') }}" class="thm-btn">
                                    <i class="fas fa-arrow-circle-right"></i> Donate Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Three Boxes End-->

        <!--Upcoming Events Start-->
        <section class="events-one" style="padding: 100px 0;">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Upcoming Events</span>
                    <h2 class="section-title__title">Check latest upcoming events</h2>
                </div>
                <div class="row">
                    @foreach($upcomingEvents as $event)
                    <div class="col-xl-4 col-lg-4 mb-4">
                        <div class="events-one__single">
                            <div class="events-one__img">
                                <img src="{{ $event->image ?? asset('assets/images/resources/events-one-img-1.jpg') }}" alt="{{ $event->title }}" style="width:100%; height:250px; object-fit:cover;">
                                <div class="events-one__date-box">
                                    <p>{{ $event->start_date->format('d') }} <br> {{ $event->start_date->format('M') }}</p>
                                </div>
                                <div class="events-one__bottom">
                                    <p><i class="fas fa-clock"></i>{{ $event->start_date->format('g:i a') }}</p>
                                    <h3 class="events-one__bottom-title"><a href="{{ route('events.show', $event->slug) }}">{{ $event->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-center mt-4">
                    <a href="{{ route('events.index') }}" class="nmm-btn" style="height: 45px; padding: 0 20px;">View All Events</a>
                </div>
            </div>
        </section>
        <!--Upcoming Events End-->

        <!--Latest News Start-->
        <section class="news-two" style="padding: 100px 0; position: relative;">
            <div class="news-two-bg" style="background-image: url({{ asset('assets/images/backgrounds/news-two-bg.jpg') }}); position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-size: cover; z-index: 1;"></div>
            <div class="news-two-bg-overlay" style="background-color: rgba(31, 2, 65, 0.6); position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 2;"></div> <!-- Softer unified brand color overlay -->
            <div class="container" style="position: relative; z-index: 3;">
                <div class="section-title text-center">
                    <span class="section-title__tagline" style="color: #ffffff !important;">Get Daily Updates</span>
                    <h2 class="section-title__title" style="color: #ffffff !important;">Latest news & articles directly <br> coming from the blog</h2>
                </div>
                <div class="row">
                    @foreach($latestNews as $news)
                    <div class="col-xl-4 col-lg-4 wow fadeInUp mb-4" data-wow-delay="100ms">
                        <div class="news-two__single bg-white">
                            <div class="news-two__img-box">
                                <div class="news-two__img">
                                    <img src="{{ Str::startsWith($news->image, 'http') ? $news->image : asset($news->image ?? '31.jpeg') }}" alt="{{ $news->title }}" style="width:100%; height:250px; object-fit:cover;">
                                    <a href="{{ route('news.show', $news->slug) }}">
                                        <i class="fas fa-link"></i>
                                    </a>
                                </div>
                                <div class="news-two__date" style="position: absolute; top: 15px; left: 15px; background: var(--thm-base); padding: 5px 10px; color: #fff; font-weight: bold; border-radius: 3px;">
                                    <p class="m-0 text-white" style="font-size: 12px;">{{ $news->published_at->format('d M, Y') }}</p>
                                </div>
                            </div>
                            <div class="news-two__content p-4">
                                <ul class="list-unstyled news-two__meta d-flex gap-3 mb-3">
                                    <li><i class="fas fa-eye" style="color: var(--thm-base);"></i> {{ $news->views }}</li>
                                    <li><i class="fas fa-heart" style="color: var(--thm-base);"></i> {{ $news->likes }}</li>
                                    <li><i class="fas fa-comments" style="color: var(--thm-base);"></i> {{ $news->comments()->count() }}</li>
                                </ul>
                                <h3 class="news-two__title"><a href="{{ route('news.show', $news->slug) }}">{{ Str::limit($news->title, 50) }}</a></h3>
                                <p class="news-two__text">{{ Str::limit(strip_tags($news->content), 100) }}</p>
                                <a href="{{ route('news.show', $news->slug) }}" class="nmm-btn mt-3" style="height: 40px; padding: 0 15px; font-size: 12px;">
                                    <i class="fas fa-arrow-circle-right"></i> Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="text-center mt-4">
                    <a href="{{ route('news.index') }}" class="nmm-btn">
                        <i class="fas fa-arrow-circle-right"></i> View All News
                    </a>
                </div>
            </div>
        </section>
        <!--Latest News End-->
@endsection
