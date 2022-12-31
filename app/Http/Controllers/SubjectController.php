<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('subjects.index');
    }

    public function viewSubjectsbyClass(Request $request, Subjects $subjects){


        $subjects = Subjects::all()->where('class', $request->searchData);

        return view('subjects.classSubjectList', compact('subjects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Subjects $subjects)
    {
        $request->validate([

            'subject_name' => 'required',
            'subject_id' => 'required',
            'class' => 'required',

        ]);
        
        Subjects::create($request->post());

        return redirect()->back()->with('message', 'Subject added successfuly.');
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
    public function edit(Request $request, Subjects $subject)
    {
       
        return view('subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subjects $subject)
    {
        $request->validate([
            'subject_name' => 'required',
            'subject_id' => 'required',
            'class' => 'required',

        ]);

        $subject->fill($request->post())->save();

        return redirect()->route('subjects.index')->with('message','Subject Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subjects $subject)
    {
        $subject->delete();
        return redirect()->route('subjects.index')->with('message','Subject has been deleted successfully');
    }
}
