<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage(){
        $latest = DB::table('articles')
                ->latest()
                ->take(3)
                ->get();
                
        $upcomingEvent = DB::table('upcoming_events')
                ->latest()
                ->take(1)
                ->get();
        return view('index', ['latest' => $latest, 'upcomingEvent' => $upcomingEvent]);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }    
}
