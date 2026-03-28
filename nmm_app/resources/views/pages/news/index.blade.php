@extends('layouts.app')

@section('title', 'Latest News & Blog - Network for Medical Missions')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Latest News & Articles</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li>News</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--News Page Start-->
<section class="news-page" style="padding: 100px 0;">
    <div class="container">
        <div class="row">
            @forelse($news as $item)
            <div class="col-xl-4 col-lg-4 wow fadeInUp mb-4" data-wow-delay="100ms">
                <div class="news-two__single bg-white shadow-sm border" style="border-radius: 5px; overflow: hidden;">
                    <div class="news-two__img-box position-relative">
                        <div class="news-two__img">
                            <img src="{{ Str::startsWith($item->image, 'http') ? $item->image : asset($item->image ?? 'assets/images/blog/news-two-img-1.jpg') }}" alt="{{ $item->title }}" style="width:100%; height:250px; object-fit:cover;">
                            <a href="{{ route('news.show', $item->slug) }}">
                                <i class="fas fa-link"></i>
                            </a>
                        </div>
                        <div class="news-two__date" style="position: absolute; top: 15px; left: 15px; background: var(--thm-blue); padding: 5px 10px; color: #fff; font-weight: bold; border-radius: 3px;">
                            <p class="m-0 text-white" style="font-size: 12px;">{{ $item->published_at->format('d M, Y') }}</p>
                        </div>
                    </div>
                    <div class="news-two__content p-4">
                        <ul class="list-unstyled news-two__meta d-flex gap-3 mb-3">
                            <li><i class="fas fa-eye text-primary"></i> {{ $item->views }}</li>
                            <li><i class="fas fa-heart text-danger"></i> {{ $item->likes }}</li>
                            <li><i class="fas fa-comments text-success"></i> {{ $item->comments()->count() }}</li>
                        </ul>
                        <h3 class="news-two__title"><a href="{{ route('news.show', $item->slug) }}">{{ Str::limit($item->title, 50) }}</a></h3>
                        <p class="news-two__text">{{ Str::limit(strip_tags($item->content), 100) }}</p>
                        <a href="{{ route('news.show', $item->slug) }}" class="nmm-btn mt-3" style="height: 40px; padding: 0 15px; font-size: 12px;">
                            <i class="fas fa-arrow-circle-right"></i> Read More
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>No news articles available at the moment.</p>
            </div>
            @endforelse
        </div>
        
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-center">
                {{ $news->links() }}
            </div>
        </div>
    </div>
</section>
<!--News Page End-->
@endsection
