<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Student;
use App\Models\Result;
use App\Models\Grade1_6_results;
use App\Models\Kg1_result;
use App\Models\Kg2_result;
use App\Models\Kg3_result;
use App\Models\Subjects;
use App\Models\PreClassResult;

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

    public function testsearch(Request $request, Student $student, Subjects $subjects)
    {
        $students = Student::where('regNumber', $request->searchData)->exists();
        

        if ($students) {
            $student = Student::where('regNumber', $request->searchData)->first();
            if($student->sclass == 'Pre-School'){

                $subject2 = Subjects::all()->where('class', $student->sclass);
                return view('preSch_results.create', compact('student', 'subject2'));
            }elseif ($student->sclass == 'KG 1') {
                $subject2 = Subjects::all()->where('class', $student->sclass);
                return view('kg1_results.create', compact('student', 'subject2'));
            }elseif ($student->sclass == 'KG 2') {
                $subject2 = Subjects::all()->where('class', $student->sclass);
                return view('kg2_results.create', compact('student', 'subject2'));
            }elseif ($student->sclass == 'KG 3') {
                
                $subject2 = Subjects::all()->where('class', $student->sclass);
                
                return view('kg3_results.create', compact('student', 'subject2'));
            }else{
                $subject2 = Subjects::all()->where('class', $student->sclass);
                
                return view('grade_results.create', compact('student', 'subject2'));
            }
   
        }else{
            Session::flash('message', 'Student record does not exist');
            return redirect()->back();
        }

         
    }


    public function bypass()
    {
        // return view('results.result-view');
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

        if ($request->sclass == 'KG 3') {
            $check = Kg3_result::where('regNumber', $request->regNumber)
            ->where('sessionName', $request->sessionName)->where('term', $request->term)->exists();
            if($check) {
                Session::flash('message', 'Result for this Student for the entered session and term exists. Edit or change the session');
                return redirect()->back();
            }else{
                Kg3_result::create($request->post());
            }
        }elseif ($request->sclass == 'KG 1') {
            $check = Kg1_result::where('regNumber', $request->regNumber)
            ->where('sessionName', $request->sessionName)->where('term', $request->term)->exists();
            if($check) {
                Session::flash('message', 'Result for this Student for the entered session and term exists. Edit or change the session');
                return redirect()->back();
            }else{
                Kg1_result::create($request->post());
            }
        }elseif ($request->sclass == 'KG 2') {
            $check = Kg2_result::where('regNumber', $request->regNumber)
            ->where('sessionName', $request->sessionName)->where('term', $request->term)->exists();
            if($check) {
                Session::flash('message', 'Result for this Student for the entered session and term exists. Edit or change the session');
                return redirect()->back();
            }else{
                Kg2_result::create($request->post());
            }
        }elseif ($request->sclass == 'Pre-School') {
            $check = Kg3_result::where('regNumber', $request->regNumber)
            ->where('sessionName', $request->sessionName)->where('term', $request->term)->exists();
            if($check) {
                Session::flash('message', 'Result for this Student for the entered session and term exists. Edit or change the session');
                return redirect()->back();
            }else{
                PreClassResult::create($request->post());
            }
        }else {
            $check = Grade1_6_results::where('regNumber', $request->regNumber)
            ->where('sessionName', $request->sessionName)->where('term', $request->term)->exists();
            if($check) {
                Session::flash('message', 'Result for this Student for the entered session and term exists. Edit or change the session');
                return redirect()->back();
            }else{
                Grade1_6_results::create($request->post());
            }
        }
 
       return redirect()->route('results.index')->with('success', 'Result successfuly submited.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result, Request $request)
    {
      
            return view('results.result-view1', compact('result'));
        
    }

   

    public function viewGrade1Results(Request $request)
    {
        $results = Grade1_6_results::where('id', $request->id)->first();
        
        return view('grade_results.grade_result-view', compact('results'));
    }

    public function viewKg1Results(Request $request)
    {
        $results = Kg1_result::where('id', $request->id)->first();
        
        return view('kg1_results.kg1_result-view', compact('results'));
    }
    public function viewKg2Results(Request $request)
    {
        $results = Kg2_result::where('id', $request->id)->first();
        
        return view('kg2_results.kg2_result-view', compact('results'));
    }

    public function viewKg3Results(Request $request)
    {
        $results = Kg3_result::where('id', $request->id)->first();
        
        return view('kg3_results.kg3_result-view', compact('results'));
    }
    public function viewPreSchResults(Request $request)
    {
        $results = PreClassResult::where('id', $request->id)->first();
        
        return view('preSch_results.pre_result-view', compact('results'));
    }


    public function viewResultsearch()
    {
        return view('results.getstudentResult');
    }

    public function displayResult(Request $request, Result $result)
    {
        if ($request->sclass == 'KG 3') {
            $check = Kg3_result::where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
            ->where('term',$request->term)->exists();

            if ($check) {
                $results = Kg3_result::all()->where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
                ->where('term',$request->term)->first();

            return view('kg3_results.result-view', compact('results'));
            }else{
                return redirect()->back()->with('message', 'No Result found.');
            }
        }elseif ($request->sclass == 'Grade 1') {
            $check = Grade1_6_results::where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
            ->where('term',$request->term)->exists();

            if ($check) {
                $results = Grade1_6_results::all()->where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
                ->where('term',$request->term)->first();

            return view('grade_results.grade_result-view', compact('results'));
            }
        }elseif ($request->sclass == 'KG 1') {
            $check = Kg1_result::where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
            ->where('term',$request->term)->exists();

            if ($check) {
                $results = Kg1_result::all()->where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
                ->where('term',$request->term)->first();

            return view('kg1_results.kg1_result-view', compact('results'));
            }
        }elseif ($request->sclass == 'KG 2') {
            $check = Kg2_result::where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
            ->where('term',$request->term)->exists();

            if ($check) {
                $results = Kg2_result::all()->where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
                ->where('term',$request->term)->first();

            return view('kg2_results.kg2_result-view', compact('results'));
            }
        }elseif ($request->sclass == 'Pre-School') {
            $check = PreClassResult::where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
            ->where('term',$request->term)->exists();

            if ($check) {
                $results = PreClassResult::all()->where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
                ->where('term',$request->term)->first();

            return view('preSch_results.pre_result-view', compact('results'));
            }
            
        }elseif ($request->sclass == 'Grade 2') {
            $check = Grade1_6_results::where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
            ->where('term',$request->term)->exists();

            if ($check) {
                $results = Grade1_6_results::all()->where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
                ->where('term',$request->term)->first();

            return view('grade_results.grade_result-view', compact('results'));
            }
        }elseif ($request->sclass == 'Grade 3') {
            $check = Grade1_6_results::where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
            ->where('term',$request->term)->exists();

            if ($check) {
                $results = Grade1_6_results::all()->where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
                ->where('term',$request->term)->first();

            return view('grade_results.grade_result-view', compact('results'));
            }
        }elseif ($request->sclass == 'Grade 4') {
            $check = Grade1_6_results::where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
            ->where('term',$request->term)->exists();

            if ($check) {
                $results = Grade1_6_results::all()->where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
                ->where('term',$request->term)->first();

            return view('grade_results.grade_result-view', compact('results'));
            }
        }elseif ($request->sclass == 'Grade 5') {
            $check = Grade1_6_results::where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
            ->where('term',$request->term)->exists();

            if ($check) {
                $results = Grade1_6_results::all()->where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
                ->where('term',$request->term)->first();

            return view('grade_results.grade_result-view', compact('results'));
            }
        }elseif ($request->sclass == 'Grade 6') {
            $check = Grade1_6_results::where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
            ->where('term',$request->term)->exists();

            if ($check) {
                $results = Grade1_6_results::all()->where('regNumber',$request->searchData)->where('sessionName',$request->sessionName)
                ->where('term',$request->term)->first();

            return view('grade_results.grade_result-view', compact('results'));
            }
        }else {
            return redirect()->back()->with('message', 'No Result found.');
        }
        
    }

    public function searchclassresult()
    {
        return view('results.searchclassresult');
    }

    public function getclassresult(Request $request, Result $result, Grade1_6_results $grade1_6_results)
    {
        
        if ($request->sclass == 'KG 3') {
            $check = Kg3_result::where('sessionName',$request->sessionName)
            ->where('term',$request->term)->where('sclass',$request->sclass)->exists();
            if ($check) {
                $results = Kg3_result::all()->where('sclass',$request->sclass)->where('term', $request->term)
                ->where('sessionName', $request->sessionName);
                $classname = Kg3_result::where('sclass',$request->sclass)->get('sclass')->first();
                //   dd($classname);
                return view('kg3_results.classresultview',compact('results'), compact('classname'));
            }else {
            
                return redirect()->back()->with('message', 'No results submited for this class');
            }
        }elseif ($request->sclass == 'Pre-School') {
            $check = PreClassResult::where('sessionName',$request->sessionName)
            ->where('term',$request->term)->where('sclass',$request->sclass)->exists();
            if ($check) {
                $results = PreClassResult::all()->where('sclass',$request->sclass)->where('term', $request->term)
                ->where('sessionName', $request->sessionName);
                $classname = PreClassResult::where('sclass',$request->sclass)->get('sclass')->first();
               
                return view('preSch_results.classresultview',compact('results'), compact('classname'));
            }else {
            
                return redirect()->back()->with('message', 'No results submited for this class');
            }
        }elseif ($request->sclass == 'KG 1') {
            $check = Kg1_result::where('sessionName',$request->sessionName)
            ->where('term',$request->term)->where('sclass',$request->sclass)->exists();
            if ($check) {
                $results = Kg1_result::all()->where('sclass',$request->sclass)->where('term', $request->term)
                ->where('sessionName', $request->sessionName);
                $classname = Kg1_result::where('sclass',$request->sclass)->get('sclass')->first();
               
                return view('kg1_results.classresultview',compact('results'), compact('classname'));
            }else {
            
                return redirect()->back()->with('message', 'No results submited for this class');
            }
        }elseif ($request->sclass == 'KG 2') {
            $check = Kg2_result::where('sessionName',$request->sessionName)
            ->where('term',$request->term)->where('sclass',$request->sclass)->exists();
            if ($check) {
                $results = Kg2_result::all()->where('sclass',$request->sclass)->where('term', $request->term)
                ->where('sessionName', $request->sessionName);
                $classname = Kg2_result::where('sclass',$request->sclass)->get('sclass')->first();
               
                return view('kg2_results.classresultview',compact('results'), compact('classname'));
            }else {
            
                return redirect()->back()->with('message', 'No results submited for this class');
            }
        }elseif ($request->sclass == 'Grade 1') {
            $check = Grade1_6_results::where('sessionName',$request->sessionName)
            ->where('term',$request->term)->where('sclass',$request->sclass)->exists();
            if ($check) {
                $results = Grade1_6_results::all()->where('sclass',$request->sclass)->where('term', $request->term)
                ->where('sessionName', $request->sessionName);
                $classname = Grade1_6_results::where('sclass',$request->sclass)->get('sclass')->first();
               
                return view('grade_results.classresultview',compact('results'), compact('classname'));
            }else {
            
                return redirect()->back()->with('message', 'No results submited for this class');
            }
        }elseif ($request->sclass == 'Grade 2') {
            $check = Grade1_6_results::where('sessionName',$request->sessionName)
            ->where('term',$request->term)->where('sclass',$request->sclass)->exists();
            if ($check) {
                $results = Grade1_6_results::all()->where('sclass',$request->sclass)->where('term', $request->term)
                ->where('sessionName', $request->sessionName);
                $classname = Grade1_6_results::where('sclass',$request->sclass)->get('sclass')->first();
               
                return view('grade_results.classresultview',compact('results'), compact('classname'));
            }else {
            
                return redirect()->back()->with('message', 'No results submited for this class');
            }
        }elseif ($request->sclass == 'Grade 3') {
            $check = Grade1_6_results::where('sessionName',$request->sessionName)
            ->where('term',$request->term)->where('sclass',$request->sclass)->exists();
            if ($check) {
                $results = Grade1_6_results::all()->where('sclass',$request->sclass)->where('term', $request->term)
                ->where('sessionName', $request->sessionName);
                $classname = Grade1_6_results::where('sclass',$request->sclass)->get('sclass')->first();
               
                return view('grade_results.classresultview',compact('results'), compact('classname'));
            }else {
            
                return redirect()->back()->with('message', 'No results submited for this class');
            }
        }elseif ($request->sclass == 'Grade 4') {
            $check = Grade1_6_results::where('sessionName',$request->sessionName)
            ->where('term',$request->term)->where('sclass',$request->sclass)->exists();
            if ($check) {
                $results = Grade1_6_results::all()->where('sclass',$request->sclass)->where('term', $request->term)
                ->where('sessionName', $request->sessionName);
                $classname = Grade1_6_results::where('sclass',$request->sclass)->get('sclass')->first();
               
                return view('grade_results.classresultview',compact('results'), compact('classname'));
            }else {
            
                return redirect()->back()->with('message', 'No results submited for this class');
            }
        }elseif ($request->sclass == 'Grade 5') {
            $check = Grade1_6_results::where('sessionName',$request->sessionName)
            ->where('term',$request->term)->where('sclass',$request->sclass)->exists();
            if ($check) {
                $results = Grade1_6_results::all()->where('sclass',$request->sclass)->where('term', $request->term)
                ->where('sessionName', $request->sessionName);
                $classname = Grade1_6_results::where('sclass',$request->sclass)->get('sclass')->first();
               
                return view('grade_results.classresultview',compact('results'), compact('classname'));
            }else {
            
                return redirect()->back()->with('message', 'No results submited for this class');
            }
        }elseif ($request->sclass == 'Grade 6') {
            $check = Grade1_6_results::where('sessionName',$request->sessionName)
            ->where('term',$request->term)->where('sclass',$request->sclass)->exists();
            if ($check) {
                $results = Grade1_6_results::all()->where('sclass',$request->sclass)->where('term', $request->term)
                ->where('sessionName', $request->sessionName);
                $classname = Grade1_6_results::where('sclass',$request->sclass)->get('sclass')->first();
               
                return view('grade_results.classresultview',compact('results'), compact('classname'));
            }else {
            
                return redirect()->back()->with('message', 'No results submited for this class');
            }
        }

        
    }

    public function printresultpage(Request $request, Result $result)
    {
        return view('results.printpage', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result, Request $request)
    {
        return view('results.edit', compact('result'));
    }

    public function editKg1Results(Kg1_result $result, Request $request)
    {
        $result = Kg1_result::where('id', $request->id)->first();
        $student = Student::where('regNumber', $result->regNumber)->first();
        $subject2 = Subjects::all()->where('class', $result->sclass);
        return view('kg1_results.edit', compact('result', 'subject2'));
    }
    public function editKg2Results(Kg2_result $result, Request $request)
    {
        $result = Kg2_result::where('id', $request->id)->first();
        $student = Student::where('regNumber', $result->regNumber)->first();
        $subject2 = Subjects::all()->where('class', $result->sclass);
        return view('kg2_results.edit', compact('result', 'subject2'));
    }

    public function editKg3Result(Kg3_result $result, Request $request)
    {
        $result = Kg3_result::where('id', $request->id)->first();
        $student = Student::where('regNumber', $result->regNumber)->first();
        $subject2 = Subjects::all()->where('class', $result->sclass);
        return view('kg3_results.edit', compact('result', 'subject2'));
    }

    public function editGradeResult(Grade1_6_results $result, Request $request)
    {
        $result = Grade1_6_results::where('id', $request->id)->first();
        $student = Student::where('regNumber', $result->regNumber)->first();
        $subject2 = Subjects::all()->where('class', $result->sclass);
        return view('grade_results.edit', compact('result', 'subject2'));
    }

    public function editPreSchResults(PreClassResult $result, Request $request)
    {
        $result = PreClassResult::where('id', $request->id)->first();
        $student = Student::where('regNumber', $result->regNumber)->first();
        $subject2 = Subjects::all()->where('class', $result->sclass);
        return view('preSch_results.edit', compact('result', 'subject2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kg3_result $result)
    {
        $request->validate([

            'regNumber' => 'required',
            'fullName' => 'required',
            'sessionName' => 'required',
            
            'sclass' => 'required'
            
        ]);

        

        // $result = $request->all();
        // Kg3_result::update($result);
       
        $result->fill($request->post())->save();
        return redirect()->route('results.index')->with('success','Result Has Been updated successfully');
        
    }

    public function updateKg1Result(Request $request, Kg1_result $result)
    {
        $request->validate([

            'regNumber' => 'required',
            'fullName' => 'required',
            'sessionName' => 'required',
            'term' => 'required',
            'sclass' => 'required'
            
        ]);

        $result = Kg1_result::where('id', $request->id)->first();

        $result->fill($request->post())->save();
        return redirect()->route('search-class-result')->with('success','Result Has Been updated successfully');
        
    }
    public function updateKg2Result(Request $request, Kg2_result $result)
    {
        $request->validate([

            'regNumber' => 'required',
            'fullName' => 'required',
            'sessionName' => 'required',
            'term' => 'required',
            'sclass' => 'required'
            
        ]);

        $result = Kg2_result::where('id', $request->id)->first();

        $result->fill($request->post())->save();
        return redirect()->route('search-class-result')->with('success','Result Has Been updated successfully');
        
    }
    public function updateKg3Result(Request $request, Kg3_result $result)
    {
        $request->validate([

            'regNumber' => 'required',
            'fullName' => 'required',
            'sessionName' => 'required',
            'term' => 'required',
            'sclass' => 'required'
            
        ]);

        $result = Kg3_result::where('id', $request->id)->first();

        $result->fill($request->post())->save();
        return redirect()->route('search-class-result')->with('success','Result Has Been updated successfully');
        
    }

    public function updateGradeResult(Request $request, Grade1_6_results $result)
    {
        $request->validate([

            'regNumber' => 'required',
            'fullName' => 'required',
            'sessionName' => 'required',
            'term' => 'required',
            'sclass' => 'required'
            
        ]);

        $result = Grade1_6_results::where('id', $request->id)->first();

        $result->fill($request->post())->save();
        return redirect()->route('search-class-result')->with('success','Result Has Been updated successfully');
        
    }

    public function updatePreSchResult(Request $request, PreClassResult $result)
    {
        $request->validate([

            'regNumber' => 'required',
            'fullName' => 'required',
            'sessionName' => 'required',
            'term' => 'required',
            'sclass' => 'required'
            
        ]);

        $result = PreClassResult::where('id', $request->id)->first();

        $result->fill($request->post())->save();
        return redirect()->route('search-class-result')->with('success','Result Has Been updated successfully');
        
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        $result->delete();
        return redirect()->route('results.index')->with('success','Result has been deleted successfully');
        
    }

    public function deleteKg1Result(Kg1_result $result, Request $request)
    {
        $result = Kg1_result::where('id', $request->id)->first();
        $result->delete();
        return redirect()->back()->with('success','Result has been deleted successfully');
    }
    public function deleteKg2Result(Kg2_result $result, Request $request)
    {
        $result = Kg2_result::where('id', $request->id)->first();
        $result->delete();
        return redirect()->back()->with('success','Result has been deleted successfully');
    }

    public function deleteKg3Result(Kg3_result $result, Request $request)
    {
        $result = Kg3_result::where('id', $request->id)->first();
        $result->delete();
        return redirect()->back()->with('success','Result has been deleted successfully');
    }

    public function deleteGradeResult(Grade1_6_results $result, Request $request)
    {
        $result = Grade1_6_results::where('id', $request->id)->first();
        $result->delete();
        return redirect()->back()->with('success','Result has been deleted successfully');
    }

    public function deletePreSchResult(PreClassResult $result, Request $request)
    {
        $result = PreClassResult::where('id', $request->id)->first();
        $result->delete();
        return redirect()->back()->with('success','Result has been deleted successfully');
    }
}
