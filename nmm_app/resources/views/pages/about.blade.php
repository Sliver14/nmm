@extends('layouts.app')

@section('title', 'Our Mission & Values - Network for Medical Missions')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Our Mission & Values</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--About Page Start-->
<section class="about-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-page__left">
                    <div class="about-page__img">
                        <img src="{{ asset('assets/images/resources/about-page-img-1.jpg') }}" alt="About NMM">
                        <div class="about-page__trusted">
                            <h3>"Sharing and promoting the knowledge of God’s love."</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-page__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">About NMM</span>
                        <h2 class="section-title__title">Our Mission Statement</h2>
                    </div>
                    <p class="about-page__right-text">We welcome Christian medical missionaries, health care professionals, partners as well as all those with a passion for providing medical, relief and community support services to hurting people around the world with the purpose of sharing and promoting the knowledge of God’s love through His Son, Jesus Christ.</p>
                    
                    <h3 class="about-page__right-title mt-5">Our Values</h3>
                    <div class="about-page__right-points mt-3">
                        <ul class="list-unstyled about-page__right-points-list">
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                <div class="text"><p>Christian Faith</p></div>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                <div class="text"><p>Collaboration and Strategic Partnership</p></div>
                            </li>
                            <li>
                                <div class="icon"><i class="fas fa-check"></i></div>
                                <div class="text"><p>Community Service</p></div>
                            </li>
                        </ul>
                    </div>
                    <a href="{{ url('/programs/free-surgeries') }}" class="thm-btn about-page__btn mt-4"><i class="fas fa-arrow-circle-right"></i>Discover Our Programs</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Page End-->

<!-- FAQ Section Start -->
<section class="faq-one mb-5">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Have questions?</span>
            <h2 class="section-title__title">Frequently Asked Questions</h2>
        </div>
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                    <div class="accrodion active">
                        <div class="accrodion-title">
                            <h4>How does the Network for Medical Missions operate?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>We operate as an international membership organization which houses national team supports and is coordinated through a global secretariat. Our structure allows for localized impact while maintaining a global standard of care and accountability.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>What are the Network for Medical Missions’ areas of focus?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>We provide free surgeries, healthcare medicines, services, and as well as supplies to the communities of sick, frail, and poor people who are at a major risk of illness, poor health, and different diseases with an aim to foster community development and Christian missionary impact.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>Who can become an Associate Member?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>Associate Membership is specifically designed for individual physicians, healthcare professionals, and development specialists who wish to contribute their expertise and be part of our professional governance and networking opportunities.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="accrodion">
                        <div class="accrodion-title">
                            <h4>How is my donation or membership fee used?</h4>
                        </div>
                        <div class="accrodion-content">
                            <div class="inner">
                                <p>100% of membership fees and donations go directly towards funding our medical missions, including purchasing surgical supplies, medicines, and community health equipment for our outreach programs in underserved regions.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ Section End -->

@endsection
