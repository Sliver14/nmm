@extends('layouts.app')

@section('title', 'Upcoming Events - Network for Medical Missions')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Upcoming Events</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Events</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Events Page Start-->
<section class="events-page" style="padding: 100px 0;">
    <div class="container">
        <div class="row">
            @forelse($events as $event)
            <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                <div class="events-one__single shadow-sm border" style="border-radius: 5px; overflow: hidden; background: #fff;">
                    <div class="events-one__img">
                        <img src="{{ $event->image ?? asset('assets/images/resources/events-one-img-1.jpg') }}" alt="{{ $event->title }}" style="width:100%; height:250px; object-fit:cover;">
                        <div class="events-one__date-box">
                            <p>{{ $event->start_date->format('d') }} <br> {{ $event->start_date->format('M') }}</p>
                        </div>
                        <div class="events-one__bottom">
                            <p><i class="far fa-clock"></i>{{ $event->start_date->format('g:i a') }}</p>
                            <h3 class="events-one__bottom-title"><a href="{{ route('events.show', $event->slug) }}">{{ $event->title }}</a></h3>
                            <a href="{{ route('events.show', $event->slug) }}" class="nmm-btn mt-3" style="height: 45px; padding: 0 20px;">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>No upcoming events available at the moment.</p>
            </div>
            @endforelse
        </div>
        
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-center">
                {{ $events->links() }}
            </div>
        </div>
    </div>
</section>
<!--Events Page End-->
@endsection
