@extends('layouts.app')

@section('title', $newsItem->title . ' - Network for Medical Missions')

@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg-1-1.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>{{ Str::limit($newsItem->title, 40) }}</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span>/</span></li>
                <li><a href="{{ route('news.index') }}">News</a></li>
                <li><span>/</span></li>
                <li>Details</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--News Details Start-->
<section class="news-details" style="padding: 100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 mx-auto">
                <div class="news-details__left">
                    <div class="news-details__img mb-4">
                        <img src="{{ Str::startsWith($newsItem->image, 'http') ? $newsItem->image : asset($newsItem->image ?? 'assets/images/blog/news-details-img.jpg') }}" alt="{{ $newsItem->title }}" style="width:100%; height:450px; object-fit:cover; border-radius: 10px;">
                    </div>
                    <div class="news-details__content p-4 bg-white shadow-sm" style="border-radius: 10px;">
                        <ul class="list-unstyled news-details__meta d-flex gap-4 mb-4" style="border-bottom: 1px solid #eee; padding-bottom: 20px;">
                            <li><i class="fas fa-calendar text-primary"></i> {{ $newsItem->published_at->format('d M, Y') }}</li>
                            <li><i class="fas fa-eye text-primary"></i> {{ $newsItem->views }} Views</li>
                            <li>
                                <form action="{{ route('news.like', $newsItem->id) }}" method="POST" class="d-inline" id="likeForm">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 text-decoration-none" style="color:inherit" id="likeBtn">
                                        <i class="fas fa-heart @if(in_array($newsItem->id, session()->get('liked_news', []))) text-muted @else text-danger @endif" id="likeIcon"></i> 
                                        <span id="likeCount">{{ $newsItem->likes }}</span> Likes
                                    </button>
                                </form>
                            </li>
                            <li><i class="fas fa-comments text-success"></i> {{ $newsItem->comments()->where('is_approved', true)->count() }} Comments</li>
                        </ul>
                        <h3 class="news-details__title mb-4" style="font-size: 32px;">{{ $newsItem->title }}</h3>
                        <div class="news-details__text-one" style="font-size: 16px; line-height: 1.8; color: #555;">
                            {!! nl2br(e($newsItem->content)) !!}
                        </div>
                    </div>
                    
                    <div class="comment-one mt-5 p-4 bg-white shadow-sm" style="border-radius: 10px;">
                        <h3 class="comment-one__title mb-4">{{ $newsItem->comments()->where('is_approved', true)->count() }} Comments</h3>
                        
                        @foreach($newsItem->comments()->where('is_approved', true)->orderBy('created_at', 'asc')->get() as $comment)
                        <div class="comment-one__single mb-4 pb-4" style="border-bottom: 1px solid #eee;">
                            <div class="comment-one__content">
                                <h4>{{ $comment->name }} <span style="font-size: 14px; color: #888; font-weight: normal; margin-left: 10px;">{{ $comment->created_at->diffForHumans() }}</span></h4>
                                <p class="mt-2">{{ $comment->content }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="comment-form mt-5 p-4 bg-white shadow-sm" style="border-radius: 10px;">
                        <h3 class="comment-form__title mb-4">Leave a Comment</h3>
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form action="{{ route('news.comment', $newsItem->id) }}" method="POST" class="comment-one__form">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="nmm-input">
                                        <input type="text" placeholder="Your Name" name="name" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="nmm-input">
                                        <input type="email" placeholder="Email Address" name="email" required>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="nmm-input">
                                        <textarea name="content" placeholder="Write a Comment" required></textarea>
                                    </div>
                                    <button type="submit" class="nmm-btn mt-3"><i class="fas fa-arrow-circle-right"></i> Submit Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--News Details End-->
@endsection

@section('extra_js')
<script>
    document.getElementById('likeForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        let btn = document.getElementById('likeBtn');
        let icon = document.getElementById('likeIcon');
        
        // Prevent multiple clicks if already disabled
        if(btn.disabled) return;

        fetch(this.action, {
            method: 'POST',
            body: new FormData(this),
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                // First time like success
                document.getElementById('likeCount').innerText = data.likes;
                icon.classList.remove('text-danger');
                icon.classList.add('text-muted');
                btn.disabled = true; // Disable further clicks
            } else {
                // They already liked it
                alert(data.message);
                icon.classList.remove('text-danger');
                icon.classList.add('text-muted');
                btn.disabled = true;
            }
        })
        .catch(error => console.error('Error:', error));
    });
</script>
@endsection
