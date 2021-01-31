<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    //
    public function index($id){
        $section = Section::with('activities')->findOrFail($id);
        return view('section-details',[
            'section' => $section ,
        ]);
    }
}
