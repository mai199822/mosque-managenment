<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    //
    public function show($id){
        $activity = Activity::findOrFail($id);
        return view('activity-details',[
            'activity' => $activity ,
        ]);
    }
    public function index(){
        return view('activities-all',[
            'activities' => Activity::paginate(),
        ]);      
    }
   
}
