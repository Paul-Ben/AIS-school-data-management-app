<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('id','asc')->paginate(5);
        return view('students.index', compact('students'));
    }

    public function viewStudent()
    {
        $students = Student::orderBy('id','asc')->paginate(10);
       
        return view('students.view-all', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Student $student)
    {
        $request->validate([

            'regNumber' => 'required',
            'firstName' => 'required',
            'lasttName' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'parentsPhone' => 'required',
            'sclass' => 'required',
            'imagename' => 'image|mimes:jpeg, jpg, png,gif|max:2048'

            

        ]);

      

        $requestData = $request->all();
        $filename = time().$request->file('imagename')->getClientOriginalName();
        $path = $request->file('imagename')->storeAs('images', $filename, 'public');
        $requestData['imagename'] = '/storage/'.$path;

        
        if (Student::where('regNumber', $request->regNumber)->exists()) {
            
            Session::flash('message', 'Reg number already exists.');
            return redirect()->back();
           
        }else {
            Student::create($requestData);
        }

        

        return redirect()->route('students.index')->with('success','Student has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Student $student)
    {

        return view('students.profile',compact('student'));
    }

    public function searchStudent(Student $student)
    {
        return view('students.search-student');
    }

    public function searchClass(Student $student)
    {
        return view('students.searchClass');
    }

    public function showStudent(Request $request, Student $student)
    {
        if (Student::where('regNumber', $request->searchData)->exists()) {

            $student = Student::where('regNumber', $request->searchData)->first();
            return view('students.profile',compact('student'));
        }elseif (Student::where('firstName', $request->searchData)->exists()) {
            # code...
            $student = Student::where('firstName', $request->searchData)->first();
            return view('students.profile', compact('student'));
        }else{
            Session::flash('message', 'Student does not exist.');
        }

        return redirect()->back();
        
    }

    public function viewClass(Request $request, Student $student)
    {
        $bclasss = Student::where('sclass', $request->searchData)->exists();
        

        if ($bclasss) {
            $sclasss = Student::where('sclass', $request->searchData)->first();
            $students = Student::all()->where('sclass', $request->searchData);
            return view('students.view-class', compact('students'), compact('sclasss'));
        }else {
            Session::flash('message', 'No student in this class.');
        }

        return redirect()->back();
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'regNumber' => 'required',
            'firstName' => 'required',
            'lasttName' => 'required',
        ]);

        $student->fill($request->post())->save();

        return redirect()->route('students.index')->with('success','student Has Been updated successfully');
    }

    public function promoteStudent()
    {
        return view('students.promoteStudents');
    }

    public function promote(Request $request, Student $student)
    {
        //$currentClass = Student::all('sclass')->where('sclass', $request->currentClass);
        //Student::insert('sclass', $request->nextClass);
        $newClass = $request->nextClass;
        //dd($newClass);
        
        $student->fill($request->post($newClass))->where('sclass', $request->currentClass)->save();
       

        return redirect->back()->with('message', 'Students Promoted Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success','student has been deleted successfully');
    }
}
