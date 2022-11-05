<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Student;
use App\Models\Result;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('results.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('results.create');
    }

    public function testme()
    {
        return view('results.getstudent');
    }

    public function testsearch(Request $request, Student $student)
    {
        $students = Student::where('regNumber', $request->searchData)->exists();

        if ($students) {
            $student = Student::where('regNumber', $request->searchData)->first();

            return view('results.create', compact('student'));
        }else{
            Session::flash('message', 'Student record does not exist');
            return redirect()->back();
        }

         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'regNumber' => 'required',
            'fullName' => 'required',
            'sessionName' => 'required',
            'term' => 'required',
            'sclass' => 'required'
            
        ]);

        $checkReg = Result::where('regNumber', $request->regNumber)->exists();
        $checkSession = Result::where('sessionName', $request->sessionName)->exists();
        $checkTerm = Result::where('term', $request->term)->exists();

        if ($checkReg  && $checkSession && $checkTerm) {

            Session::flash('message', 'Result for this Student for the entered session and term exists. Edit or change the session');
            return redirect()->back();
           // Result::create($request->post());

            
        }else{
            Result::create($request->post());
        }

        return redirect()->route('results.index')->with('success', 'Result successfuly submited.');
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
    }
}