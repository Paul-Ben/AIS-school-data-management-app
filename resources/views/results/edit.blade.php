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
                        <td><input type="text" name="subject1_1st_ca" id="s1_ca1" size="4" maxlength="2" value="{{$result->subject1_1st_ca}}" ></td>
                        <td><input type="text" name="subject1_2nd_ca" id="s1_ca2" size="4" maxlength="2" value="{{$result->subject1_2nd_ca}}"></td>
                        <td><input type="text" name="subject1_project" id="s1_pjkt" size="4" maxlength="2" value="{{$result->subject1_project}}"></td>
                        <td><input type="text" name="subject1_exam" id="s1_exam" size="4" maxlength="2" value="{{$result->subject1_exam}}"></td>
                        <td><input type="text" name="subject1_overall" id="s1_overall" onfocus="calcOverall()" size="4" maxlength="3" value="{{$result->subject1_overall}}"></td>
                        <td><input type="text" name="subject1_Grade" id="s1_grade" size="4"maxlength="1" value="{{$result->subject1_Grade}}"></td>
                        <td>
                            <input type="text" name="subject1_remarks" id="sub1_rmks" size="9"  value="{{$result->subject1_remarks}}" required>
                            
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
                        <td><input type="text" name="subject2_1st_ca" id="s2_ca1" size="4" maxlength="2" value="{{$result->subject2_1st_ca}}"></td>
                        <td><input type="text" name="subject2_2nd_ca" id="s2_ca2" size="4" maxlength="2" value="{{$result->subject2_2nd_ca}}"></td>
                        <td><input type="text" name="subject2_project" id="s2_pjkt" size="4" maxlength="2" value="{{$result->subject2_project}}"></td>
                        <td><input type="text" name="subject2_exam" id="s2_exam" size="4" maxlength="2" value="{{$result->subject2_exam}}"></td>
                        <td><input type="text" name="subject2_overall" id="overall2" size="4" maxlength="3" onfocus="calcOverall2()" value="{{$result->subject2_overall}}"></td>
                        <td><input type="text" name="subject2_Grade" id="s2_grade" size="4" maxlength="1" value="{{$result->subject2_Grade}}"></td>
                        <td>
                            <input type="text" name="subject2_remarks" id="sub2_rmks" size="9" value="{{$result->subject2_remarks}}"  required>
                           
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
                        <td><input type="text" name="subject3_1st_ca" id="s3_ca1" size="4" maxlength="2" value="{{$result->subject3_1st_ca}}"></td>
                        <td><input type="text" name="subject3_2nd_ca" id="s3_ca2" size="4" maxlength="2" value="{{$result->subject3_2nd_ca}}"></td>
                        <td><input type="text" name="subject3_project" id="s3_pjkt" size="4" maxlength="2" value="{{$result->subject3_project}}"></td>
                        <td><input type="text" name="subject3_exam" id="s3_exam" size="4" maxlength="2" value="{{$result->subject3_exam}}"></td>
                        <td><input type="text" name="subject3_overall" id="overall3" size="4" maxlength="3" onfocus="calcOverall3()" value="{{$result->subject3_overall}}"></td>
                        <td><input type="text" name="subject3_Grade" id="s3_grade" size="4" maxlength="1" value="{{$result->subject3_Grade}}"></td>
                        <td>
                            <input type="text" name="subject3_remarks" id="sub3_rmks" size="9" value="{{$result->subject3_remarks}}"  required>
                           
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
                        <td><input type="text" name="subject4_1st_ca" id="s4_ca1" size="4" maxlength="2" value="{{$result->subject4_1st_ca}}"></td>
                        <td><input type="text" name="subject4_2nd_ca" id="s4_ca2" size="4" maxlength="2" value="{{$result->subject4_2nd_ca}}"></td>
                        <td><input type="text" name="subject4_project" id="s4_pjkt" size="4" maxlength="2" value="{{$result->subject4_project}}"></td>
                        <td><input type="text" name="subject4_exam" id="s4_exam" size="4" maxlength="2" value="{{$result->subject4_exam}}"></td>
                        <td><input type="text" name="subject4_overall" id="overall4" size="4" maxlength="3" onfocus="calcOverall4()" value="{{$result->subject4_overall}}"></td>
                        <td><input type="text" name="subject4_Grade" id="s4_grade" size="4" maxlength="1" value="{{$result->subject4_Grade}}"></td>
                        <td>
                            <input type="text" name="subject4_remarks" id="sub4_rmks" size="9" value="{{$result->subject4_remarks}}"  required>
                            
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
                        <td><input type="text" name="subject5_1st_ca" id="s5_ca1" size="4" maxlength="2" value="{{$result->subject5_1st_ca}}"></td>
                        <td><input type="text" name="subject5_2nd_ca" id="s5_ca2" size="4" maxlength="2" value="{{$result->subject5_2nd_ca}}"></td>
                        <td><input type="text" name="subject5_project" id="s5_pjkt" size="4" maxlength="2" value="{{$result->subject5_project}}"></td>
                        <td><input type="text" name="subject5_exam" id="s5_exam" size="4" maxlength="2" value="{{$result->subject5_exam}}"></td>
                        <td><input type="text" name="subject5_overall" id="overall5" size="4" maxlength="3" onfocus="calcOverall5()" value="{{$result->subject5_overall}}"></td>
                        <td><input type="text" name="subject5_Grade" id="s5_grade" size="4" maxlength="1" value="{{$result->subject5_Grade}}"></td>
                        <td>
                            <input type="text" name="subject5_remarks" id="sub5_rmks" size="9" value="{{$result->subject5_remarks}}"  required>
                            
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
                        <td><input type="text" name="subject6_1st_ca" id="s6_ca1" size="4" maxlength="2"  value="{{$result->subject6_1st_ca}}"></td>
                        <td><input type="text" name="subject6_2nd_ca" id="s6_ca2" size="4" maxlength="2" value="{{$result->subject6_2nd_ca}}"></td>
                        <td><input type="text" name="subject6_project" id="s6_pjkt" size="4" maxlength="2" value="{{$result->subject6_project}}"></td>
                        <td><input type="text" name="subject6_exam" id="s6_exam" size="4" maxlength="2" value="{{$result->subject6_exam}}"></td>
                        <td><input type="text" name="subject6_overall" id="overall6" size="4" maxlength="3" onfocus="calcOverall6()" value="{{$result->subject6_overall}}"></td>
                        <td><input type="text" name="subject6_Grade" id="s6_grade" size="4" maxlength="1" value="{{$result->subject6_Grade}}"></td>
                        <td>
                            <input type="text" name="subject6_remarks" id="sub6_rmks" size="9" value="{{$result->subject6_remarks}}"  required>
                           
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
                        <td><input type="text" name="subject7_1st_ca" id="s7_ca1" size="4" maxlength="2" value="{{$result->subject7_1st_ca}}"></td>
                        <td><input type="text" name="subject7_2nd_ca" id="s7_ca2" size="4" maxlength="2" value="{{$result->subject7_2nd_ca}}"></td>
                        <td><input type="text" name="subject7_project" id="s7_pjkt" size="4" maxlength="2" value="{{$result->subject7_project}}"></td>
                        <td><input type="text" name="subject7_exam" id="s7_exam" size="4" maxlength="2" value="{{$result->subject7_exam}}"></td>
                        <td><input type="text" name="subject7_overall" id="overall7" size="4" maxlength="3" onfocus="calcOverall7()" value="{{$result->subject7_overall}}"></td>
                        <td><input type="text" name="subject7_Grade" id="s7_grade" size="4" maxlength="1" value="{{$result->subject7_Grade}}"></td>
                        <td>
                            <input type="text" name="subject7_remarks" id="sub7_rmks" size="9"  value="{{$result->subject7_remarks}}" required>
                           
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
    <script src="{{asset('/assets/styles/result/results.js')}}"></script>
   
   
@endsection