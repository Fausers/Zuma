<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\FrontContent;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function front()
    {
        $front = FrontContent::first();
        return view('dashboard.front',compact('front'));
    }

    public function events()
    {
        $events = Event::get();
        return view('site.events',compact('events'));
    }

    public function event($id)
    {
        $event = Event::findOrFail($id);
        return view('site.event',compact('event'));
    }
}
