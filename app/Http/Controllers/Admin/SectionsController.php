<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Section;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    protected $rules = [
        'section_name' => 'required|string|max:255|min:2',
        'description' => 'string|nullable|max:2000'
    ];
    //main page
    public function index(){
        return view('admin.sections.index',[
            'sections' => Section::paginate(),
        ]);


    }
    //creat section
    public function creat(){
        return view('admin.sections.creat');
       
    }
    //insert section
    public function insert(Request $request){
        $request->validate($this->rules);
        $section = Section::create($request->all());

        
        $message = sprintf('%s created!', $section->section_name);
        return redirect()
            ->route('sections')
            ->with('success', $message); // With flash message!
       
       
    }
    //edit section
    public function edit($id){
        $section = Section::find($id);
        if(!$section){
            abort(404);
        }
        return view('admin.sections.edit',[
            'sections' => $section,
        ]);
    }
    //update section
    public function update(Request $request,$id){
        $request->validate($this->rules);

        $section = Section::findOrFail($id);
        $section->update($request->all());
        
        $message = sprintf('%s updated!', $section->section_name);
        return redirect()
            ->route('sections')
            ->with('success', $message); // With flash message!


    }
    //delete section
    public function delete($id){
        $section = Section::findOrFail($id);
        $section->delete();
        return redirect()->route('sections');

    }
}
