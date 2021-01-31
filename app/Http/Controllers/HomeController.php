<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Section;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider_sections = Section::latest()->limit(2)->get();
        $activities_slider=Activity::with('section')->latest()->limit(6)->get();
        return view('home',[
            'slider_sections' => $slider_sections,
            'activities_slider' => $activities_slider,
        ]);
        return view('layouts/home',[
            'slider_sections' => $slider_sections,
            'activities_slider' => $activities_slider,
        ]);
    }
}
