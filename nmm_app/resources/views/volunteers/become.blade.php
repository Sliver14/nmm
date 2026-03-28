@extends('layouts.app')

@section('title', 'Become a Volunteer - Network for Medical Missions')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Become a Volunteer</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Volunteers</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Become Volunteer Start-->
<section class="become-volunteer">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="become-volunteer__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Volunteer With Us</span>
                        <h2 class="section-title__title">Join the Network for Medical Missions</h2>
                    </div>
                    <p class="become-volunteer__text">We welcome Christian medical missionaries, health care professionals, partners as well as all those with a passion for providing medical, relief and community support services.</p>
                    <div class="become-volunteer__big-text">
                        <h2>Why Volunteer with NMM?</h2>
                    </div>
                    <ul class="list-unstyled become-volunteer__list">
                        <li>
                            <div class="icon"><i class="fas fa-arrow-circle-right"></i></div>
                            <div class="text"><p>Make a direct impact in vulnerable communities.</p></div>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-arrow-circle-right"></i></div>
                            <div class="text"><p>Share the knowledge of God's love through your skills.</p></div>
                        </li>
                        <li>
                            <div class="icon"><i class="fas fa-arrow-circle-right"></i></div>
                            <div class="text"><p>Be part of a global team of Christian professionals.</p></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="become-volunteer__right">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('volunteers.process') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="nmm-input">
                                    <input type="text" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="nmm-input">
                                    <input type="text" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" required>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="nmm-input">
                                    <input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="nmm-input">
                                    <input type="text" placeholder="Phone Number" name="phone" value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="nmm-input">
                                    <input type="text" placeholder="Country" name="country" value="{{ old('country') }}" required>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="nmm-input">
                                    <select name="profession" required>
                                        <option value="" disabled selected>Select Profession</option>
                                        <option value="Physician">Physician</option>
                                        <option value="Nurse">Nurse</option>
                                        <option value="Specialist">Specialist</option>
                                        <option value="Non-Medical">Non-Medical Volunteer</option>
                                        <option value="Partner">Partner Organization</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="nmm-input">
                                    <textarea name="availability_message" placeholder="Message / Availability">{{ old('availability_message') }}</textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="nmm-btn">
                                    <i class="fas fa-arrow-circle-right"></i> Submit Application
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Become Volunteer End-->
@endsection
