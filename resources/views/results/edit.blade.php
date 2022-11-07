@extends('dashboard')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Edit Result</h2>
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
        <form action="{{ route('results.update', $result->id) }}" method="PUT" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="form-group">
                        <strong>Student Registration Number:</strong>
                        <input type="text" name="regNumber" class="form-control" placeholder="Registration Number" value="{{$result->regNumber}}" >
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
                        <input type="text" name="fullName" class="form-control" placeholder="Full Name" value="{{$result->fullName}}">
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
                        <input type="text" name="sessionName" class="form-control" placeholder="Session" value="{{$result->sessionName}}">
                        @error('sessionName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="form-group">
                        <strong>Term:</strong>
                        <select class="form-control" name="term" aria-label="Default select example">
                            <option selected value="">{{$result->term}}</option>
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
                            <option selected>{{$result->sclass}}</option>
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
                        <input class="form-control" type="date" name="termending" id="" value="{{$result->termending}}">
                        @error('termending')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>   
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="form-group">
                        <strong>Next Term Begins:</strong>
                        <input class="form-control" type="date" name="termbegins" id="" value="{{$result->termbegins}}">
                        @error('termbegins')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>   
                <table>
                    
                    <tr>
                        <td>
                            
                        </td>
                        <td colspan="3"><h4>Test Scores</h4></td>
                        <td><h4>Exam Scores</h4></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td><h4>Subjects</h4> </td>
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
                                <option value="" selected>{{$result->subject1}}</option>
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
                        <td><input type="text" name="subject1_1st_ca" id="ca1" size="4" maxlength="2" value="{{$result->subject1_1st_ca}}" ></td>
                        <td><input type="text" name="subject1_2nd_ca" id="ca2" size="4" maxlength="2" value="{{$result->subject1_2nd_ca}}"></td>
                        <td><input type="text" name="subject1_project" id="pjkt" size="4" maxlength="2" value="{{$result->subject1_project}}"></td>
                        <td><input type="text" name="subject1_exam" id="exam" size="4" maxlength="2" value="{{$result->subject1_exam}}"></td>
                        <td><input type="text" name="subject1_overall" id="overall" size="4" maxlength="3" value="{{$result->subject1_overall}}"></td>
                        <td><input type="text" name="subject1_Grade" id="grade" size="4"maxlength="1" value="{{$result->subject1_Grade}}"></td>
                        <td>
                            <select class="" name="subject1_remarks" id="rmks">
                                <option value="" selected>{{$result->subject1_remarks}}</option>
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
                                <option value="" selected>{{$result->subject2}}</option>
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
                        <td><input type="text" name="subject2_1st_ca" id="" size="4" maxlength="2" value="{{$result->subject2_1st_ca}}"></td>
                        <td><input type="text" name="subject2_2nd_ca" id="" size="4" maxlength="2" value="{{$result->subject2_2nd_ca}}"></td>
                        <td><input type="text" name="subject2_project" id="" size="4" maxlength="2" value="{{$result->subject2_project}}"></td>
                        <td><input type="text" name="subject2_exam" id="" size="4" maxlength="2" value="{{$result->subject2_exam}}"></td>
                        <td><input type="text" name="subject2_overall" id="" size="4" maxlength="3" value="{{$result->subject2_overall}}"></td>
                        <td><input type="text" name="subject2_Grade" id="" size="4" maxlength="1" value="{{$result->subject2_Grade}}"></td>
                        <td>
                            <select class="" name="subject2_remarks" id="">
                                <option value="" selected>{{$result->subject2_remarks}}</option>
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
                                <option value="" selected>{{$result->subject3}}</option>
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
                        <td><input type="text" name="subject3_1st_ca" id="" size="4" maxlength="2" value="{{$result->subject3_1st_ca}}"></td>
                        <td><input type="text" name="subject3_2nd_ca" id="" size="4" maxlength="2" value="{{$result->subject3_2nd_ca}}"></td>
                        <td><input type="text" name="subject3_project" id="" size="4" maxlength="2" value="{{$result->subject3_project}}"></td>
                        <td><input type="text" name="subject3_exam" id="" size="4" maxlength="2" value="{{$result->subject3_exam}}"></td>
                        <td><input type="text" name="subject3_overall" id="" size="4" maxlength="3" value="{{$result->subject3_overall}}"></td>
                        <td><input type="text" name="subject3_Grade" id="" size="4" maxlength="1" value="{{$result->subject3_Grade}}"></td>
                        <td>
                            <select class="" name="subject3_remarks" id="">
                                <option value="" selected>{{$result->subject3_remarks}}</option>
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
                                <option value="" selected>{{$result->subject4}}</option>
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
                        <td><input type="text" name="subject4_1st_ca" id="" size="4" maxlength="2" value="{{$result->subject4_1st_ca}}"></td>
                        <td><input type="text" name="subject4_2nd_ca" id="" size="4" maxlength="2" value="{{$result->subject4_2nd_ca}}"></td>
                        <td><input type="text" name="subject4_project" id="" size="4" maxlength="2" value="{{$result->subject4_project}}"></td>
                        <td><input type="text" name="subject4_exam" id="" size="4" maxlength="2" value="{{$result->subject4_exam}}"></td>
                        <td><input type="text" name="subject4_overall" id="" size="4" maxlength="3" value="{{$result->subject4_overall}}"></td>
                        <td><input type="text" name="subject4_Grade" id="" size="4" maxlength="1" value="{{$result->subject4_Grade}}"></td>
                        <td>
                            <select class="" name="subject4_remarks" id="">
                                <option value="" selected>{{$result->subject4_remarks}}</option>
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
                                <option value="" selected>{{$result->subject5}}</option>
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
                        <td><input type="text" name="subject5_1st_ca" id="" size="4" maxlength="2" value="{{$result->subject5_1st_ca}}"></td>
                        <td><input type="text" name="subject5_2nd_ca" id="" size="4" maxlength="2" value="{{$result->subject5_2nd_ca}}"></td>
                        <td><input type="text" name="subject5_project" id="" size="4" maxlength="2" value="{{$result->subject5_project}}"></td>
                        <td><input type="text" name="subject5_exam" id="" size="4" maxlength="2" value="{{$result->subject5_exam}}"></td>
                        <td><input type="text" name="subject5_overall" id="" size="4" maxlength="3" value="{{$result->subject5_overall}}"></td>
                        <td><input type="text" name="subject5_Grade" id="" size="4" maxlength="1" value="{{$result->subject5_Grade}}"></td>
                        <td>
                            <select class="" name="subject5_remarks" id="">
                                <option value="" selected>{{$result->subject5_remarks}}</option>
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
                                <option value="" selected>{{$result->subject6}}</option>
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
                        <td><input type="text" name="subject6_1st_ca" id="" size="4" maxlength="2"  value="{{$result->subject6_1st_ca}}"></td>
                        <td><input type="text" name="subject6_2nd_ca" id="" size="4" maxlength="2" value="{{$result->subject6_2nd_ca}}"></td>
                        <td><input type="text" name="subject6_project" id="" size="4" maxlength="2" value="{{$result->subject6_project}}"></td>
                        <td><input type="text" name="subject6_exam" id="" size="4" maxlength="2" value="{{$result->subject6_exam}}"></td>
                        <td><input type="text" name="subject6_overall" id="" size="4" maxlength="3" value="{{$result->subject6_overall}}"></td>
                        <td><input type="text" name="subject6_Grade" id="" size="4" maxlength="1" value="{{$result->subject6_Grade}}"></td>
                        <td>
                            <select class="" name="subject6_remarks" id="">
                                <option value="" selected>{{$result->subject6_remarks}}</option>
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
                                <option value="" selected>{{$result->subject7}}</option>
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
                        <td><input type="text" name="subject7_1st_ca" id="" size="4" maxlength="2" value="{{$result->subject7_1st_ca}}"></td>
                        <td><input type="text" name="subject7_2nd_ca" id="" size="4" maxlength="2" value="{{$result->subject7_2nd_ca}}"></td>
                        <td><input type="text" name="subject7_project" id="" size="4" maxlength="2" value="{{$result->subject7_project}}"></td>
                        <td><input type="text" name="subject7_exam" id="" size="4" maxlength="2" value="{{$result->subject7_exam}}"></td>
                        <td><input type="text" name="subject7_overall" id="" size="4" maxlength="3" value="{{$result->subject7_overall}}"></td>
                        <td><input type="text" name="subject7_Grade" id="" size="4" maxlength="1" value="{{$result->subject7_Grade}}"></td>
                        <td>
                            <select class="" name="subject7_remarks" id="">
                                <option value="" selected>{{$result->subject7_remarks}}</option>
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
                                <option value="" selected>{{$result->subject8}}</option>
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
                        <td><input type="text" name="subject8_1st_ca" id="" size="4" maxlength="2" value="{{$result->subject8_1st_ca}}"></td>
                        <td><input type="text" name="subject8_2nd_ca" id="" size="4" maxlength="2" value="{{$result->subject8_2nd_ca}}"></td>
                        <td><input type="text" name="subject8_project" id="" size="4" maxlength="2" value="{{$result->subject8_project}}"></td>
                        <td><input type="text" name="subject8_exam" id="" size="4" maxlength="2" value="{{$result->subject8_exam}}"></td>
                        <td><input type="text" name="subject8_overall" id="" size="4" maxlength="3" value="{{$result->subject8_overall}}"></td>
                        <td><input type="text" name="subject8_Grade" id="" size="4" maxlength="1" value="{{$result->subject8_Grade}}"></td>
                        <td>
                            <select class="" name="subject8_remarks" id="">
                                <option value="" selected>{{$result->subject8_remarks}}</option>
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
                                <option value="" selected>{{$result->subject9}}</option>
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
                        <td><input type="text" name="subject9_1st_ca" id="" size="4" maxlength="2" value="{{$result->subject9_1st_ca}}"></td>
                        <td><input type="text" name="subject9_2nd_ca" id="" size="4" maxlength="2" value="{{$result->subject9_2nd_ca}}"></td>
                        <td><input type="text" name="subject9_project" id="" size="4" maxlength="2" value="{{$result->subject9_project}}"></td>
                        <td><input type="text" name="subject9_exam" id="" size="4" maxlength="2" value="{{$result->subject9_exam}}"></td>
                        <td><input type="text" name="subject9_overall" id="" size="4" maxlength="3" value="{{$result->subject9_overall}}"></td>
                        <td><input type="text" name="subject9_Grade" id="" size="4" maxlength="1" value="{{$result->subject9_Grade}}"></td>
                        <td>
                            <select class="" name="subject9_remarks" id="">
                                <option value="" selected>{{$result->subject9_remarks}}</option>
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
                            <input type="text" name="tComment" class="form-control" placeholder="Teacher's Comment" value="{{$result->tComment}}" >
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
                            <input type="text" name="htComment" class="form-control" placeholder="Teacher's Comment" value="{{$result->htComment}}">
                            @error('htComment')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div>
                    
                </div>
                <div class=" ">
                    <div class="card">
                    <h3>Grades:</h3><br>
                    <pre>
                        80-100 A 
                        70-79  B
                        60-69  C 
                        50-59  D 
                        40-49  E 
                         0-39  F 
                    </pre>
                </div>
            </div>
                <div class="mt-4">
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
            </div>
        </form>
    </div>
    <script>
        

    </script>
@endsection