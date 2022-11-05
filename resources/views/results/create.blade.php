@extends('dashboard')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Result</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('results.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('results.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="form-group">
                        <strong>Student Registration Number:</strong>
                        <input type="text" name="regNumber" class="form-control" placeholder="Registration Number" value="{{$student->regNumber}}" >
                        @error('regNumber')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="form-group">
                        <strong>Student Full Name:</strong>
                        <input type="text" name="fullName" class="form-control" placeholder="Full Name" value="{{$student->firstName}} {{$student->middleName}} {{$student->lasttName}}">
                        @error('fullName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="form-group">
                        <strong>Middle Name:</strong>
                        <input type="text" name="middleName" class="form-control" placeholder="dob" value="{{ $student->middleName}}" >
                        @error('middleName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="form-group">
                        <strong>Student Last Name:</strong>
                        <input type="text" name="lasttName" class="form-control" placeholder="Last Name" value="{{$student->lasttName}}">
                        @error('lasttName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div> --}}
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="form-group">
                        <strong>Session:</strong>
                        <input type="text" name="sessionName" class="form-control" placeholder="Session">
                        @error('sessionName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="form-group">
                        <strong>Term:</strong>
                        <select class="form-control" name="term" aria-label="Default select example">
                            <option selected value="">Select the Term</option>
                            <option value="First Term">First Term</option>
                            <option value="Second Term">Second Term</option>
                            <option value="Third Term">Third Term</option>
                            </select>
                        @error('term')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="form-group">
                        <strong>Select Student Class:</strong>
                        <select class="form-control" name="sclass" aria-label="Default select example">
                            <option selected>Select Student Class</option>
                            <option value="Pre-School">Pre-School</option>
                            <option value="KG 1">KG 1</option>
                            <option value="KG 2">KG 2</option>
                            <option value="KG 3">KG 3</option>
                            <option value="Grade 1">Grade 1</option>
                            <option value="Grade 2">Grade 2</option>
                            <option value="Grade 3">Grade 3</option>
                            <option value="Grade 4">Grade 4</option>
                            <option value="Grade 5">Grade 5</option>
                            <option value="Grade 6">Grade 6</option>
                            </select>
                        @error('sclass')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="form-group">
                        <strong>Term Ending:</strong>
                        <input class="form-control" type="date" name="termending" id="">
                        @error('termending')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>   
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="form-group">
                        <strong>Next Term Begins:</strong>
                        <input class="form-control" type="date" name="termbegins" id="">
                        @error('termbegins')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>   
                <table>
                    <tr>
                        <td>
                            <h3>Grades:</h3><br>
                            {{-- <pre class="pull-left">
                                80-100 A 
                                70-79  B
                                60-69  C 
                                50-59  D 
                                40-49  E 
                                 0-39  F 
                            </pre> --}}
                        
                        </td>
                        <td colspan="3"><h4>Test Scores</h4></td>
                        <td><h4>Exam Scores</h4></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td>Subjects</td>
                        <td>1st CA 10%</td>
                        <td>2nd CA 10%:</td>
                        <td>Project 10%</td>
                        <td>Exams 70%</td>
                        <td>Overall:</td>
                        <td>Grade</td>
                        <td>Remark</td>
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject1" id="">
                                <option value="" selected>Select Subject</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="English/Phonics">English/Phonics</option>
                                <option value="Health Science">Health Science</option>
                                <option value="Bible Knowledge">Bible Knowledge</option>
                                <option value="Social Studies">Social Studies</option>
                                <option value="Home Economics">Home Economics</option>
                                <option value="French">French</option>
                                <option value="Agricultural Science">Agricultural Science</option>
                                <option value="Civic Education">Civic Education</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Creative Arts">Creative Arts</option>
                                <option value="Hand Writing">Hand Writing</option>
                                <option value="Letter Work">Letter Work</option>
                                <option value="Number Work">Number Work</option>
                            </select>
                        </td>
                        <td><input type="text" name="subject1_1st_ca" id="" size="4" maxlength="2" ></td>
                        <td><input type="text" name="subject1_2nd_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject1_project" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject1_exam" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject1_overall" id="" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject1_Grade" id="" size="4"maxlength="1"></td>
                        <td>
                            <select class="" name="subject1_remarks" id="">
                                <option value="" selected>Select Remark</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Very Good">Very Good</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Poor">Poor</option>
                            
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject2" id="">
                                <option value="" selected>Select Subject</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="English/Phonics">English/Phonics</option>
                                <option value="Health Science">Health Science</option>
                                <option value="Bible Knowledge">Bible Knowledge</option>
                                <option value="Social Studies">Social Studies</option>
                                <option value="Home Economics">Home Economics</option>
                                <option value="French">French</option>
                                <option value="Agricultural Science">Agricultural Science</option>
                                <option value="Civic Education">Civic Education</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Creative Arts">Creative Arts</option>
                                <option value="Hand Writing">Hand Writing</option>
                                <option value="Letter Work">Letter Work</option>
                                <option value="Number Work">Number Work</option>
                            </select>
                        </td>
                        <td><input type="text" name="subject2_1st_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject2_2nd_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject2_project" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject2_exam" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject2_overall" id="" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject2_Grade" id="" size="4" maxlength="1"></td>
                        <td>
                            <select class="" name="subject2_remarks" id="">
                                <option value="" selected>Select Remark</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Very Good">Very Good</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Poor">Poor</option>
                            
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject3" id="">
                                <option value="" selected>Select Subject</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="English/Phonics">English/Phonics</option>
                                <option value="Health Science">Health Science</option>
                                <option value="Bible Knowledge">Bible Knowledge</option>
                                <option value="Social Studies">Social Studies</option>
                                <option value="Home Economics">Home Economics</option>
                                <option value="French">French</option>
                                <option value="Agricultural Science">Agricultural Science</option>
                                <option value="Civic Education">Civic Education</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Creative Arts">Creative Arts</option>
                                <option value="Hand Writing">Hand Writing</option>
                                <option value="Letter Work">Letter Work</option>
                                <option value="Number Work">Number Work</option>
                            </select>
                        </td>
                        <td><input type="text" name="subject3_1st_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject3_2nd_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject3_project" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject3_exam" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject3_overall" id="" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject3_Grade" id="" size="4" maxlength="1"></td>
                        <td>
                            <select class="" name="subject3_remarks" id="">
                                <option value="" selected>Select Remark</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Very Good">Very Good</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Poor">Poor</option>
                            
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject4" id="">
                                <option value="Mathematics">Mathematics</option>
                                <option value="English/Phonics">English/Phonics</option>
                                <option value="Health Science">Health Science</option>
                                <option value="Bible Knowledge">Bible Knowledge</option>
                                <option value="Social Studies">Social Studies</option>
                                <option value="Home Economics">Home Economics</option>
                                <option value="French">French</option>
                                <option value="Agricultural Science">Agricultural Science</option>
                                <option value="Civic Education">Civic Education</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Creative Arts">Creative Arts</option>
                                <option value="Hand Writing">Hand Writing</option>
                                <option value="Letter Work">Letter Work</option>
                                <option value="Number Work">Number Work</option>
                            </select>
                        </td>
                        <td><input type="text" name="subject4_1st_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject4_2nd_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject4_project" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject4_exam" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject4_overall" id="" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject4_Grade" id="" size="4" maxlength="1"></td>
                        <td>
                            <select class="" name="subject4_remarks" id="">
                                <option value="" selected>Select Remark</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Very Good">Very Good</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Poor">Poor</option>
                            
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject5" id="">
                                <option value="" selected>Select Subject</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="English/Phonics">English/Phonics</option>
                                <option value="Health Science">Health Science</option>
                                <option value="Bible Knowledge">Bible Knowledge</option>
                                <option value="Social Studies">Social Studies</option>
                                <option value="Home Economics">Home Economics</option>
                                <option value="French">French</option>
                                <option value="Agricultural Science">Agricultural Science</option>
                                <option value="Civic Education">Civic Education</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Creative Arts">Creative Arts</option>
                                <option value="Hand Writing">Hand Writing</option>
                                <option value="Letter Work">Letter Work</option>
                                <option value="Number Work">Number Work</option>
                            </select>
                        </td>
                        <td><input type="text" name="subject5_1st_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject5_2nd_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject5_project" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject5_exam" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject5_overall" id="" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject5_Grade" id="" size="4" maxlength="1"></td>
                        <td>
                            <select class="" name="subject5_remarks" id="">
                                <option value="" selected>Select Remark</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Very Good">Very Good</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Poor">Poor</option>
                            
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject6" id="">
                                <option value="" selected>Select Subject</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="English/Phonics">English/Phonics</option>
                                <option value="Health Science">Health Science</option>
                                <option value="Bible Knowledge">Bible Knowledge</option>
                                <option value="Social Studies">Social Studies</option>
                                <option value="Home Economics">Home Economics</option>
                                <option value="French">French</option>
                                <option value="Agricultural Science">Agricultural Science</option>
                                <option value="Civic Education">Civic Education</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Creative Arts">Creative Arts</option>
                                <option value="Hand Writing">Hand Writing</option>
                                <option value="Letter Work">Letter Work</option>
                                <option value="Number Work">Number Work</option>
                            </select>
                        </td>
                        <td><input type="text" name="subject6_1st_ca" id="" size="4" maxlength="2" ></td>
                        <td><input type="text" name="subject6_2nd_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject6_project" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject6_exam" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject6_overall" id="" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject6_Grade" id="" size="4" maxlength="1"></td>
                        <td>
                            <select class="" name="subject6_remarks" id="">
                                <option value="" selected>Select Remark</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Very Good">Very Good</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Poor">Poor</option>
                            
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject7" id="">
                                <option value="" selected>Select Subject</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="English/Phonics">English/Phonics</option>
                                <option value="Health Science">Health Science</option>
                                <option value="Bible Knowledge">Bible Knowledge</option>
                                <option value="Social Studies">Social Studies</option>
                                <option value="Home Economics">Home Economics</option>
                                <option value="French">French</option>
                                <option value="Agricultural Science">Agricultural Science</option>
                                <option value="Civic Education">Civic Education</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Creative Arts">Creative Arts</option>
                                <option value="Hand Writing">Hand Writing</option>
                                <option value="Letter Work">Letter Work</option>
                                <option value="Number Work">Number Work</option>
                            </select>
                        </td>
                        <td><input type="text" name="subject7_1st_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject7_2nd_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject7_project" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject7_exam" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject7_overall" id="" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject7_Grade" id="" size="4" maxlength="1"></td>
                        <td>
                            <select class="" name="subject7_remarks" id="">
                                <option value="" selected>Select Remark</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Very Good">Very Good</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Poor">Poor</option>
                            
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject8" id="">
                                <option value="" selected>Select Subject</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="English/Phonics">English/Phonics</option>
                                <option value="Health Science">Health Science</option>
                                <option value="Bible Knowledge">Bible Knowledge</option>
                                <option value="Social Studies">Social Studies</option>
                                <option value="Home Economics">Home Economics</option>
                                <option value="French">French</option>
                                <option value="Agricultural Science">Agricultural Science</option>
                                <option value="Civic Education">Civic Education</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Creative Arts">Creative Arts</option>
                                <option value="Hand Writing">Hand Writing</option>
                                <option value="Letter Work">Letter Work</option>
                                <option value="Number Work">Number Work</option>
                            </select>
                        </td>
                        <td><input type="text" name="subject8_1st_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject8_2nd_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject8_project" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject8_exam" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject8_overall" id="" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject8_Grade" id="" size="4" maxlength="1"></td>
                        <td>
                            <select class="" name="subject8_remarks" id="">
                                <option value="" selected>Select Remark</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Very Good">Very Good</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Poor">Poor</option>
                            
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject9" id="">
                                <option value="" selected>Select Subject</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="English/Phonics">English/Phonics</option>
                                <option value="Health Science">Health Science</option>
                                <option value="Bible Knowledge">Bible Knowledge</option>
                                <option value="Social Studies">Social Studies</option>
                                <option value="Home Economics">Home Economics</option>
                                <option value="French">French</option>
                                <option value="Agricultural Science">Agricultural Science</option>
                                <option value="Civic Education">Civic Education</option>
                                <option value="Computer Science">Computer Science</option>
                                <option value="Creative Arts">Creative Arts</option>
                                <option value="Hand Writing">Hand Writing</option>
                                <option value="Letter Work">Letter Work</option>
                                <option value="Number Work">Number Work</option>
                            </select>
                        </td>
                        <td><input type="text" name="subject9_1st_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject9_2nd_ca" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject9_project" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject9_exam" id="" size="4" maxlength="2"></td>
                        <td><input type="text" name="subject9_overall" id="" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject9_Grade" id="" size="4" maxlength="1"></td>
                        <td>
                            <select class="" name="subject9_remarks" id="">
                                <option value="" selected>Select Remark</option>
                                <option value="Excellent">Excellent</option>
                                <option value="Very Good">Very Good</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Poor">Poor</option>
                            
                            </select>
                        </td>
                        
                    </tr>
                </table>
                <div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Class Teacher's Comment:</strong>
                            <input type="text" name="tComment" class="form-control" placeholder="Teacher's Comment" >
                            @error('tComment')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Head Teacher's Comment:</strong>
                            <input type="text" name="htComment" class="form-control" placeholder="Teacher's Comment" >
                            @error('htComment')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div>
                    

                </div>
                <div class="mt-4">
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
            </div>
        </form>
    </div>
@endsection