<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Event;

class PageController extends Controller
{
    // Home Page
    public function index()
    {
        $latestNews = News::where('is_published', true)->orderBy('published_at', 'desc')->take(3)->get();
        $upcomingEvents = Event::where('is_active', true)->where('start_date', '>=', now())->orderBy('start_date', 'asc')->take(3)->get();

        return view('pages.home', compact('latestNews', 'upcomingEvents'));
    }

    // Support Our Projects
    public function support()
    {
        return view('pages.support');
    }

    // About Us (Mission & Values)
    public function about()
    {
        return view('pages.about');
    }

    // Contact Us
    public function contact()
    {
        return view('pages.contact');
    }

    // Selection Criteria
    public function criteria()
    {
        return view('pages.criteria');
    }

    // Programs
    public function freeSurgeries()
    {
        return view('programs.free-surgeries');
    }

    public function woundCare()
    {
        return view('programs.wound-care');
    }

    public function widowsCampaign()
    {
        return view('programs.widows-campaign');
    }

    public function healthFairs()
    {
        return view('programs.health-fairs');
    }
}
