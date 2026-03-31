<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Network for Medical Missions')</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Network for Medical Missions" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/halpes-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/halpes.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/halpes-responsive.css') }}" />

    <style>
        :root {
            --thm-base: #23b5d3;   /* Unified Brand Color */

            /* Mapping theme variables */
            --thm-primary: var(--thm-base);
            --thm-primary-rgb: 35, 181, 211; /* RGB for #23b5d3 */
            --thm-black: #1a1a1a;
            --thm-gray: #707876;
            --thm-blue: var(--thm-base);
            --thm-purple: var(--thm-base);
        }

        /* Custom Overrides for NMM Branding */
        .main-menu__donate-btn, .thm-btn, .nmm-btn, .welcome-one__btn {
            background-color: var(--thm-base) !important;
            color: #ffffff !important;
        }
        .main-menu__donate-btn:hover, .thm-btn:hover, .nmm-btn:hover, .welcome-one__btn:hover {
            background-color: #1e99b3 !important; /* Slightly darker shade for hover */
            color: #ffffff !important;
        }

        .section-title__tagline {
            color: var(--thm-base) !important;
        }
        .section-title__title {
            color: #1a1a1a !important;
        }

        /* Hover states, links, and accents */
        a, a:hover, .main-menu__list > li:hover > a {
            color: var(--thm-base);
        }
        .main-menu .main-menu__list>li>a::before,
        .stricky-header .main-menu__list>li>a::before {
            background-color: var(--thm-base) !important;
        }

        .main-header__logo, .stricky-logo {
            background-color: var(--thm-base) !important;
        }

        .nmm-input input:focus, .nmm-input textarea:focus, .nmm-input select:focus {
            border-color: var(--thm-base) !important;
        }

        /* Video Slider Overlay */
        .main-slider .image-layer-overlay {
            background: rgba(104, 13, 250, 0.4) !important;
        }

        /* Date badges, Toggler, and Accent Icons */
        .news-two__date, .events-one__date-box {
            background-color: var(--thm-base) !important;
        }
        .mobile-header__toggler-box {
            background-color: transparent !important; /* Remove bg color */
        }
        .mobile-header__top-text, .mobile-header__top-social a, .mobile-header__toggler-box .mobile-nav__toggler,
        .news-two__meta li i, .events-one__bottom p i, .news-details__meta li i {
            color: var(--thm-base) !important;
        }
        .page-header__inner h2 {
            color: var(--thm-base) !important;
        }

        /* --- Main Slider Global Styles (Mobile First) --- */
        .main-slider__content p {
            font-family: 'Nunito', sans-serif !important;
            color: #ffffff !important;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 10px !important;
            font-size: 16px; /* Mobile font size */
        }
        .main-slider__content h2 {
            font-family: 'Nunito', sans-serif !important;
            color: #ffffff !important;
            font-weight: 800;
            line-height: 1.2 !important;
            margin-bottom: 15px !important;
            font-size: 32px; /* Mobile font size */
        }

        /* --- Desktop Slider Adjustments --- */
        @media (min-width: 1200px) {
            .main-slider .swiper-slide {
                height: calc(100vh - 110px) !important;
                display: flex !important;
                align-items: center !important;
            }
            .main-slider .container {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }
            .main-slider__content p {
                font-size: 40px !important; /* Larger desktop size */
                margin-bottom: 15px !important;
            }
            .main-slider__content h2 {
                font-size: 85px !important; /* Larger desktop size */
                line-height: 1.1 !important;
                margin-bottom: 25px !important;
            }
            .main-slider__content .thm-btn {
                padding: 15px 35px !important;
                font-size: 16px !important;
            }
        }

        /* Welcome Section Text Fixes */
        .welcome-one__bottom-text {
            font-family: 'Nunito', sans-serif !important;
            font-size: 28px !important;
            font-weight: 800 !important;
            color: var(--thm-base) !important;
            margin: 0 !important;
        }

        /* Shrink News Date Badge */
        .news-two__date {
            padding: 3px 10px !important;
            min-width: auto !important;
            height: auto !important;
            right: 10px !important;
            bottom: 10px !important;
            top: auto !important;
            left: auto !important;
            border-radius: 4px !important;
            z-index: 5;
        }
        .news-two__date p {
            font-size: 11px !important;
            font-weight: 900 !important;
            text-transform: uppercase;
            color: #ffffff !important;
            margin: 0 !important;
        }

        /* Custom Form UI Concept (Inspired by Newsletter) */
        .nmm-input {
            position: relative;
            display: block;
            margin-bottom: 20px;
        }
        .nmm-input input, .nmm-input textarea, .nmm-input select {
            height: 67px;
            width: 100%;
            font-size: 14px;
            color: var(--thm-gray);
            font-weight: 700;
            padding-left: 30px;
            padding-right: 30px;
            outline: none;
            border: 1px solid #dfe3e7;
            background-color: #f4f7f9;
            transition: all 0.3s ease;
        }
        .nmm-input textarea {
            height: 150px;
            padding-top: 20px;
        }
        .nmm-input input:focus, .nmm-input textarea:focus, .nmm-input select:focus {
            border-color: var(--thm-blue);
            background-color: #fff;
        }
        .nmm-btn {
            height: 67px;
            padding: 0 40px;
            font-size: 14px;
            font-weight: 900;
            background-color: var(--thm-blue);
            color: #fff;
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        .nmm-btn i {
            margin-right: 10px;
        }
        .nmm-btn:hover {
            background-color: var(--thm-purple);
            color: var(--thm-gold);
        }

        /* FAQ Spacing and UI */
        .faq-one-accrodion .accrodion {
            margin-bottom: 20px; /* Space between questions */
            border: 1px solid #dfe3e7;
        }
        .faq-one-accrodion .accrodion-title {
            background: #fff;
            border-bottom: none;
            padding: 25px 30px;
        }
        .faq-one-accrodion .accrodion-title h4 {
            color: var(--thm-blue);
        }
        .faq-one-accrodion .accrodion.active .accrodion-title h4 {
            color: var(--thm-purple);
        }
        .faq-one-accrodion .accrodion-content {
            background: #f4f7f9;
            padding: 20px 30px 30px;
            border-bottom: none;
        }
        .faq-one-accrodion .accrodion-content p {
            color: #555;
            line-height: 1.8;
        }

        /* Fix covering and unclickable issues on home page */
        .preloader {
            display: none !important; /* Force hide preloader if JS fails */
        }
        .image-layer-overlay {
            pointer-events: none; /* Prevent overlay from blocking clicks */
        }
        .main-slider .container {
            position: relative;
            z-index: 10; /* Ensure slider content is above the overlay */
        }
        .mobile-nav__overlay {
            display: none; /* Ensure mobile nav overlay is hidden by default */
        }
        .mobile-nav__wrapper.expanded .mobile-nav__overlay {
            display: block;
        }

        .stricky-header {
            padding: 0 !important; /* Remove outer padding to match main header flex */
            background-color: #ffffff !important;
            border-bottom: 1px solid #eaeaea;
        }
        .stricky-header .main-menu__inner {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center !important;
            width: 100% !important;
            padding: 0 !important;
        }
        .stricky-header .main-menu__right {
            display: flex !important;
            align-items: center !important;
            padding-right: 30px !important; /* Match main nav right edge */
        }
        .stricky-logo {
            padding: 10px 30px !important;
            display: flex;
            align-items: center;
            background-color: var(--thm-blue) !important;
            margin-right: 25px; /* Same as menu items margin */
        }
        .stricky-header .main-menu__list {
            margin-left: 0 !important;
        }
        .stricky-header .main-menu__list > li > a {
            padding: 20px 0 !important;
            font-size: 14px !important;
        }

        /* Fix Three Boxes Covering Issue */
        .three-boxes__single-content {
            position: relative;
            z-index: 3; /* Places content above the overlay */
        }
        .three-boxes__single-content h3,
        .three-boxes__single-content p {
            color: #ffffff;
            position: relative;
        }
        .three-boxes__single-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .three-boxes__single-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* --- Background Video Support --- */
        .slider-video-bg {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 1 !important; /* Force video above swiper slide background */
            transform: translateX(-50%) translateY(-50%);
            object-fit: cover;
            filter: grayscale(0%) !important; /* Override theme grayscale */
            opacity: 1 !important;
        }
        .main-slider .image-layer {
            display: none !important; /* Hide static image layer entirely */
        }
        .main-slider .image-layer-overlay {
            z-index: 2 !important; /* Keep overlay above video */
            background: rgba(0, 51, 102, 0.4) !important; /* Override theme's dark/solid overlay */
            pointer-events: none; /* Prevent blocking clicks */
        }
        .main-slider .container {
            z-index: 10 !important; /* Keep text above video and overlay */
            position: relative;
        }

        /* --- Header & Navigation Compact/Horizontal Fixes --- */
        .main-header {
            padding: 0 !important;
            background-color: #ffffff !important; /* Unified background */
            display: flex !important;
            align-items: center !important;
            width: 100%;
            border-bottom: 1px solid #eaeaea; /* Subtle bottom edge */
        }
        .main-header::before, .main-header::after {
            display: none !important; /* Remove clearfix block formatting */
        }
        .main-header__logo {
            padding: 10px 30px !important;
            display: flex;
            align-items: center;
            background-color: var(--thm-blue) !important; /* Restored original blue box */
            width: auto !important; /* Override theme's 15% width */
            float: none !important;
            flex-shrink: 0;
        }
        .main-menu-wrapper {
            background-color: transparent !important;
            width: 100% !important; /* Fill remaining space */
            float: none !important;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-width: 0; /* Prevent flex blowout */
        }
        .main-menu-wrapper__top {
            padding: 5px 0 !important;
            height: auto !important;
            background-color: transparent !important;
            box-shadow: none !important; /* Remove old shadow */
            border-bottom: 1px solid #f4f7f9; /* Subtle divider */
        }
        .main-menu-wrapper__top-inner {
            padding: 0 30px !important; /* Perfectly align with bottom nav */
        }
        .main-menu-wrapper__left-text p,
        .main-menu-wrapper__left-email-box a,
        .main-menu-wrapper__right-social a {
            font-size: 14px !important; /* Reverted top text size */
            white-space: nowrap;
        }
        .main-menu-wrapper__left-email-box .icon {
            font-size: 14px !important;
        }
        .main-menu-wrapper__bottom {
            padding: 0 !important;
            margin-top: 0 !important;
            height: auto !important;
            background-color: transparent !important;
        }
        .main-menu .main-menu__inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px; /* Reverted to give more room for links */
            flex-wrap: nowrap;
        }
        .main-menu__list {
            display: flex !important;
            flex-direction: row !important;
            flex-wrap: nowrap !important;
            align-items: center;
            margin: 0;
            padding: 0;
        }
        .main-menu__list > li {
            padding: 0 !important;
            margin-left: 25px !important; /* Reverted spacing between links */
        }
        .main-menu__list > li:first-child {
            margin-left: 0 !important;
        }
        .main-menu__list > li > a {
            padding: 20px 0 !important; /* Reverted vertical padding */
            white-space: nowrap !important;
            font-size: 14px !important; /* Reverted nav text */
            display: inline-block;
            font-weight: 700;
        }
        /* Move underline closer to text */
        .main-menu .main-menu__list>li>a::before,
        .stricky-header .main-menu__list>li>a::before {
            bottom: 15px !important; /* Adjust underline for new padding */
        }
        .main-menu__right {
            display: flex;
            align-items: center;
            flex-wrap: nowrap !important;
            gap: 15px; /* Reverted gap before Donate button */
        }
        .main-menu__donate-btn {
            white-space: nowrap !important;
            padding: 10px 20px !important; /* Reverted donate button */
            font-size: 14px !important;
            height: auto !important;
            line-height: normal !important;
            display: inline-flex;
            align-items: center;
        }

        /* --- Page Header Compactness & Minimal UI --- */
        .page-header {
            padding: 10px 0 !important;
            background-color: #f4f7f9 !important;
            min-height: auto !important;
            border-bottom: 1px solid #e0e0e0;
        }
        .page-header .container {
            display: flex !important;
            justify-content: flex-end !important; /* Push content to the right */
            align-items: center !important;
            padding-top: 0 !important; /* Removed top padding */
            padding-bottom: 0 !important; /* Removed bottom padding */
        }
        .page-header-bg, .page-header__bg {
            display: none !important;
        }
        .page-header__inner {
            padding: 0 !important; /* Removed container padding */
            margin: 0 !important;
            background-color: transparent !important; /* Removed blue background */
            display: inline-block !important;
        }
        .page-header__inner h2 {
            font-size: 14px !important; /* Further reduced font size */
            margin: 0 !important; /* Removed all margins */
            padding: 0 !important; /* Removed all padding */
            color: var(--thm-blue) !important;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700; /* Reduced font weight */
            line-height: 1 !important; /* Tighten line height */
        }
        .thm-breadcrumb {
            display: none !important;
        }

        /* --- Dedicated Mobile Header Styles --- */
        .mobile-header {
            display: none; /* Hidden on Desktop */
        }

        /* Responsive overrides for smaller desktop screens before mobile breakpoint */
        @media (max-width: 1199px) {
            /* Hide Desktop Headers completely */
            .main-header, .stricky-header {
                display: none !important;
            }

            /* Show Dedicated Mobile Header */
            .mobile-header {
                display: block !important;
                background-color: #ffffff;
                border-bottom: 1px solid #eaeaea;
                position: relative;
                z-index: 99;
            }
            .mobile-header__top {
                display: flex !important;
                justify-content: space-between;
                align-items: center;
                padding: 2px 20px;
                background-color: #f4f7f9;
                border-bottom: 1px solid #eee;
                font-size: 11px;
                font-weight: 700;
            }
            .mobile-header__top-text {
                color: var(--thm-blue);
            }
            .mobile-header__top-social a {
                color: var(--thm-blue);
                margin-left: 10px;
            }
            .mobile-header__bottom {
                display: flex !important;
                justify-content: space-between;
                align-items: center;
                padding: 5px 20px;
            }
            .mobile-header__logo img {
                width: 100px;
            }
            .mobile-header__toggler-box {
                background-color: transparent;
                padding: 6px 0;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .mobile-header__toggler-box .mobile-nav__toggler {
                color: var(--thm-blue) !important;
                font-size: 24px !important;
                cursor: pointer;
                margin: 0;
                line-height: 1;
            }
        }

        /* --- Restore Mobile Nav Vertical Layout --- */
        .mobile-nav__content .main-menu__list {
            display: flex !important;
            flex-direction: column !important;
            align-items: flex-start !important;
        }
        .mobile-nav__content .main-menu__list > li {
            width: 100%;
            margin-left: 0 !important;
        }
        .mobile-nav__content .main-menu__list > li > a {
            white-space: normal !important;
            padding: 10px 0 !important;
        }
        .mobile-nav__content {
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none; /* Firefox */
        }
        .mobile-nav__content::-webkit-scrollbar {
            display: none; /* Chrome, Safari and Opera */
        }
        .mobile-nav__close {
            color: #ffffff !important; /* Force close icon to be white */
        }

        /* --- Mobile Sidebar Social Styling --- */
        .mobile-nav__social {
            display: flex;
            align-items: center;
            padding-top: 30px;
        }
        .mobile-nav__social a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            font-size: 16px;
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        .mobile-nav__social a:hover {
            background-color: var(--thm-base);
            color: #ffffff;
        }
        /* --- Mobile Sidebar Contact Styling --- */
        .mobile-nav__contact li i {
            display: flex !important;
            align-items: center;
            justify-content: center;
            width: 35px !important;
            height: 35px !important;
            background-color: var(--thm-base) !important; /* Circle background */
            color: #ffffff !important; /* Icon color must be white to be visible! */
            border-radius: 50% !important;
            margin-right: 15px;
            font-size: 14px !important;
            flex-shrink: 0;
        }
        .mobile-nav__contact li {
            display: flex !important;
            align-items: center !important;
            margin-bottom: 20px;
        }
        .mobile-nav__contact li a {
            color: #ffffff !important;
            font-size: 14px;
            font-weight: 700;
            line-height: 1.2;
            word-break: break-all;
        }

        /* --- Contact Page Responsiveness --- */
        .contact-page {
            padding: 80px 0;
        }
        .contact-page__left {
            padding-right: 0px; /* Remove large right padding to give more room */
        }
        .contact-page__contact-info {
            margin-top: 30px;
        }
        .contact-page__contact-list li {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            background: #f8f9fa;
            padding: 20px 25px; /* Increased inner padding */
            border-radius: 12px;
            transition: all 0.3s ease;
            width: 100%; /* Ensure full width */
        }
        .contact-page__contact-list li:hover {
            background: #ffffff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transform: translateY(-2px);
        }
        .contact-page__contact-list li .icon {
            width: 55px;
            height: 55px;
            background-color: var(--thm-base);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            margin-right: 25px;
            flex-shrink: 0;
            color: #ffffff;
            font-size: 22px;
        }
        .contact-page__contact-list li .text p {
            margin: 0;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--thm-base);
            margin-bottom: 4px;
        }
        .contact-page__contact-list li .text a,
        .contact-page__contact-list li .text span {
            font-size: 19px; /* Larger for better readability */
            font-weight: 800;
            color: var(--thm-black);
            display: block;
            line-height: 1.2;
            word-break: break-word;
        }

        .contact-page__form {
            background: #ffffff;
            padding: 50px; /* Increased padding for desktop elegance */
            box-shadow: 0 20px 50px rgba(0,0,0,0.06);
            border-radius: 20px;
        }

        @media (max-width: 991px) {
            .contact-page {
                padding: 60px 0;
            }
            .contact-page__left {
                margin-bottom: 40px;
            }
            .contact-page__form {
                padding: 30px 20px;
            }
            .contact-page__contact-list li .text a,
            .contact-page__contact-list li .text span {
                font-size: 16px;
            }
        }
    </style>
    @yield('extra_css')
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="{{ asset('logo.png') }}" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">

        <!-- Dedicated Mobile Header -->
        <header class="mobile-header">
            <div class="mobile-header__top">
                <div class="mobile-header__top-text">Network for Medical Missions</div>
                <div class="mobile-header__top-social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="mobile-header__bottom">
                <div class="mobile-header__logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('logo.png') }}" alt="NMM Logo">
                    </a>
                </div>
                <div class="mobile-header__toggler-box">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </header>

        <header class="main-header clearfix">
            <div class="main-header__logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('logo.png') }}" alt="NMM Logo" width="150">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="main-menu-wrapper__top">
                    <div class="main-menu-wrapper__top-inner">
                        <div class="main-menu-wrapper__left">
                            <div class="main-menu-wrapper__left-content">
                                <div class="main-menu-wrapper__left-text">
                                    <p>Network for Medical Missions</p>
                                </div>
                                <div class="main-menu-wrapper__left-email-box">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="email">
                                        <a href="mailto:contact@networkformedicalmissions.org">contact@networkformedicalmissions.org</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu-wrapper__right">
                            <div class="main-menu-wrapper__right-social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu-wrapper__bottom">
                    <nav class="main-menu">
                        <div class="main-menu__inner">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="dropdown">
                                    <a href="#">About Us</a>
                                    <ul>
                                        <li><a href="{{ url('/about') }}">Our Mission & Values</a></li>
                                        <li><a href="{{ url('/criteria') }}">Selection Criteria</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Programs</a>
                                    <ul>
                                        <li><a href="{{ url('/programs/free-surgeries') }}">Free Surgeries</a></li>
                                        <li><a href="{{ url('/programs/wound-care') }}">Wound Care Outreaches</a></li>
                                        <li><a href="{{ url('/programs/widows-campaign') }}">Health For Widows</a></li>
                                        <li><a href="{{ url('/programs/health-fairs') }}">Community Health Fairs</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('events.index') }}">Events</a></li>
                                <li><a href="{{ route('news.index') }}">News</a></li>
                                <li class="dropdown">
                                    <a href="#">Membership</a>
                                    <ul>
                                        <li><a href="{{ route('membership.associate.form') }}">Associate Membership</a></li>
                                        <li><a href="{{ route('membership.individual.form') }}">Individual Membership</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/volunteers') }}">Volunteering</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                            <div class="main-menu__right">
                                <a href="{{ url('/support') }}" class="main-menu__donate-btn"><i class="fa fa-heart"></i>Donate Now</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!-- Flash Messages -->
        <div class="container mt-3">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        @yield('content')

        <!--Site Footer One Start-->
        <footer class="site-footer">
            <div class="site-footer-bg" style="background-image: url({{ asset('assets/images/backgrounds/footer-bg.jpg') }});"></div>
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <h3 class="footer-widget__title">About</h3>
                                <p class="footer-widget__about-text">We welcome Christian medical missionaries, health care professionals, partners as well as all those with a passion for providing medical, relief and community support services.</p>
                                <a href="{{ url('/support') }}" class="footer-widget__about-btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Donate Now</a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__explore clearfix">
                                <h3 class="footer-widget__title">Explore</h3>
                                <ul class="footer-widget__explore-list list-unstyled">
                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                    <li><a href="{{ url('/programs/free-surgeries') }}">Free Surgeries</a></li>
                                    <li><a href="{{ url('/volunteers') }}">Volunteers</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title">Contact</h3>
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div class="icon"><i class="icon-chat"></i></div>
                                        <div class="text">
                                            <p><span>Call Anytime</span><a href="tel:+2340000000000">+234 912 710 0302</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="icon-message"></i></div>
                                        <div class="text">
                                            <p><span>Send Email</span><a href="mailto:contact@networkformedicalmissions.org">contact@networkformedicalmissions.org</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__newsletter">
                                <h3 class="footer-widget__title">Newsletter</h3>
                                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="footer-widget__newsletter-form">
                                    @csrf
                                    <input type="email" placeholder="Email address" name="email" required>
                                    <button type="submit" class="footer-widget__newsletter-btn"><i class="fas fa-arrow-circle-right"></i>Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <div class="site-footer__bottom-logo-social">
                                    <div class="site-footer__bottom-logo">
                                        <a href="{{ url('/') }}"><img src="{{ asset('logo.png') }}" alt="" width="100"></a>
                                    </div>
                                    <div class="site-footer__bottom-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="site-footer__bottom-copy-right">
                                    <p>© Copyright 2026 by <a href="#">Network for Medical Missions</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer One End-->

    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="{{ url('/') }}" aria-label="logo image"><img src="{{ asset('logo.png') }}" width="155" alt="" /></a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li><i class="fas fa-envelope"></i><a href="mailto:contact@networkformedicalmissions.org">contact@networkformedicalmissions.org</a></li>
                <li><i class="fas fa-phone-alt"></i><a href="tel:+2340000000000">+234 912 710 0302</a></li>
            </ul>
            <!-- <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div> -->
        </div>
    </div>

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="{{ asset('assets/vendors/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- template js -->
    <script src="{{ asset('assets/js/halpes.js') }}"></script>
    <script>
        $(window).on('scroll load', function() {
            // Check if sticky header is active and if we haven't added the logo yet
            if ($('.stricky-header .main-menu__inner').length && !$('.stricky-header .stricky-logo').length) {
                $('.stricky-header .main-menu__inner').prepend(
                    '<div class="stricky-logo" style="margin-right: auto; padding: 15px 0;"><a href="{{ url('/') }}"><img src="{{ asset('logo.png') }}" width="120" alt="NMM Logo"></a></div>'
                );
            }
        });
    </script>
    @yield('extra_js')
</body>
</html>
