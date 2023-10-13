<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::paginate(10);
        return view('dashboard.section.index',compact('sections'));
    }
 
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('dashboard.section.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titlear' => 'required',
            'titleen' => 'required'
        ],
        [
            'titlear.required' => 'Title in Arabic is required.',
            'titleen.required' => 'Title in English is required.',
        ]
    );

    $section= Section::create([
        'sectionAR'=>$request->titlear,
        'sectionEN'=>$request->titleen
     ]);
     
     if(!$section){
        return redirect(route('section.create'))->with("error"," error");
    }
    else
    {
    return redirect(route('section.create'))->with("success","Saved successfully");
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sections= Section::findorFail($id);
        return view('dashboard.section.edit',compact('sections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'titlear' => 'required',
            'titleen' => 'required'
        ],
        [
            'titlear.required' => 'Title in Arabic is required.',
            'titleen.required' => 'Title in English is required.',
        ]
    );
    
        $section= Section::findorFail($id);
        $section->update([
                'sectionAR'=>$request->titlear,
                'sectionEN'=>$request->titleen
        ]);

        if(!$section){
            return redirect(route('section.edit',$id))->with("error"," error");
        }
        else
        {
        return redirect(route('section.edit',$id))->with("success","Saved successfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {        
        $section= section::findorFail($id)->delete();
        if(!$section){
            return redirect(route('section.index'))->with("error"," error");
        }
        else
        {
        return redirect(route('section.index'))->with("success","Saved successfully");
        }

    }
} 
