<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =[
        'section_id' => 'required|int|exists:sections,id',
        'activity_name' => 'required|string|max:255',
        'requirments' => 'nullable',
        'max_students' => 'numeric',
    ];
    public function __construct(){
        $this-> middleware(['auth','verified']);
    }
    public function index()
    {
        //
        return view('admin.activities.index',[
            'activities' => Activity::paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.activities.creat');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate($this->rules);


        $activity = Activity::create($request->all());
        $message = sprintf('Activity %s created!', $activity->activity_name);

        return redirect()
            ->route('activities')
            ->with('success', $message );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $activity = Activity::findOrFail($id);
        return view('admin.activities.edit',[
            'activity' => $activity
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate($this->rules);
        $activity = Activity::findOrFail($id);
        $activity->update($request->all());
        $message= sprintf('Activity %s updated!!', $activity->activity_name);
        return redirect()
            ->route('activities')
            ->with('success', $message );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $activity = Activity::findOrFail($id);
        $activity->delete();
        return redirect()->route('activities');
    }
}
