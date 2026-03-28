@extends('layouts.app')

@section('title', $event->title . ' - Network for Medical Missions')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>{{ Str::limit($event->title, 40) }}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li><a href="{{ route('events.index') }}">Events</a></li>
                <li><span>/</span></li>
                <li>Details</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Event Details Start-->
<section class="event-details" style="padding: 100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 mx-auto">
                <div class="event-details__left">
                    <div class="event-details__img mb-4">
                        <img src="{{ $event->image ?? asset('assets/images/resources/events-one-img-1.jpg') }}" alt="{{ $event->title }}" style="width:100%; height:450px; object-fit:cover; border-radius: 10px;">
                    </div>
                    
                    <div class="event-details__content p-4 bg-white shadow-sm mb-5" style="border-radius: 10px;">
                        <ul class="list-unstyled event-details__meta d-flex gap-4 mb-4" style="border-bottom: 1px solid #eee; padding-bottom: 20px; font-weight: bold; color: var(--thm-blue);">
                            <li><i class="far fa-calendar"></i> {{ $event->start_date->format('d M, Y') }}</li>
                            <li><i class="far fa-clock"></i> {{ $event->start_date->format('g:i a') }} - {{ $event->end_date->format('g:i a') }}</li>
                            <li><i class="fas fa-map-marker-alt text-danger"></i> {{ $event->location }}</li>
                        </ul>
                        
                        <h3 class="event-details__title mb-4" style="font-size: 32px;">{{ $event->title }}</h3>
                        <p class="event-details__text-1" style="font-size: 16px; line-height: 1.8; color: #555;">
                            {!! nl2br(e($event->description)) !!}
                        </p>
                        
                        <div class="mt-4 pt-4 border-top">
                            <h4 class="mb-3">Join This Event</h4>
                            <p class="text-muted">Interested in participating or volunteering for this event? Reach out to us for more details.</p>
                            <a href="{{ route('contact') }}" class="nmm-btn mt-3" style="height: 50px; padding: 0 30px;"><i class="fas fa-arrow-circle-right"></i> Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Event Details End-->
@endsection
