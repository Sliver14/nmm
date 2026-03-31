<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Event;

class ContentController extends Controller
{
    // News/Blog Methods
    public function newsIndex()
    {
        $news = News::where('is_published', true)->orderBy('published_at', 'desc')->paginate(9);
        return view('pages.news.index', compact('news'));
    }

    public function newsShow($slug)
    {
        $newsItem = News::where('slug', $slug)->firstOrFail();
        
        // Increment views
        $newsItem->increment('views');

        return view('pages.news.show', compact('newsItem'));
    }

    public function likeNews(Request $request, $id)
    {
        $newsItem = News::findOrFail($id);
        
        // Check if the user has already liked this post in their session
        $likedPosts = session()->get('liked_news', []);
        
        if (in_array($id, $likedPosts)) {
            return response()->json(['success' => false, 'message' => 'You have already liked this post.', 'likes' => $newsItem->likes]);
        }
        
        // Increment likes and save to session
        $newsItem->increment('likes');
        session()->push('liked_news', $id);
        
        return response()->json(['success' => true, 'likes' => $newsItem->likes]);
    }

    public function postComment(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'content' => 'required|string',
        ]);

        $newsItem = News::findOrFail($id);
        $newsItem->comments()->create($request->all());

        return back()->with('success', 'Comment posted successfully!');
    }

    // Events Methods
    public function eventsIndex()
    {
        $events = Event::where('is_active', true)->orderBy('start_date', 'asc')->paginate(9);
        return view('pages.events.index', compact('events'));
    }

    public function eventsShow($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('pages.events.show', compact('event'));
    }
}
