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
        <form action="{{ route('updatePreSchResult', $result->id) }}" method="POST" enctype="multipart/form-data">
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
                        <strong>Student Class:</strong>
                        <input type="text" name="sclass" class="form-control" placeholder="Student Class" value="{{$result->sclass}}" >
                        @error('sclass')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
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
                            <option selected value="{{$result->term}}">{{$result->term}}</option>
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
                        <td colspan="3"><h4>Exam Scores</h4></td>
                        
                        <td><h4></h4></td>
                        <td></td>
                        
                        
                    </tr>
                    <tr>
                        <td><h4>Subjects</h4> </td>
                       
                        <td>100%:</td>
                        <td>Grade</td>
                        <td>Remark</td>
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject1" id="" required>
                                <option value="{{$result->subject1}}">{{$result->subject1}}</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                                
                            </select>
                        </td>
                        
                        <td><input type="text" name="subject1_exam" id="s1_overall"  size="4" maxlength="3" value="{{$result->subject1_exam}}"></td>
                        <td><input type="text" name="subject1_grade" id="s1_grade" onfocus="calcOverall()" size="4"maxlength="1" value="{{$result->subject1_grade}}"></td>
                        <td>
                            <input type="text" name="subject1_remarks" id="sub1_rmks" size="9"  value="{{$result->subject1_remarks}}" required>
                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject2" id="" required>
                                <option value="{{$result->subject2}}" selected>{{$result->subject2}}</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                                
                            </select>
                        </td>
                        {{-- <td><input type="text" name="subject2_1st_ca" id="s2_ca1" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject2_2nd_ca" id="s2_ca2" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject2_project" id="s2_pjkt" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject2_exam" id="s2_exam" size="4" maxlength="2" required></td> --}}
                        <td><input type="text" name="subject2_exam" id="overall2"  size="4" maxlength="3" value="{{$result->subject2_exam}}"></td>
                        <td><input type="text" name="subject2_grade" id="s2_grade" onfocus="calcOverall2()" size="4" maxlength="1" value="{{$result->subject2_grade}}"></td>
                        <td>
                            <input type="text" name="subject2_remarks" id="sub2_rmks" size="9" value="{{$result->subject2_remarks}}"  required>
                            
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject3" id="" required>
                                <option value="{{$result->subject3}}" selected>{{$result->subject3}}</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                      
                            </select>
                        </td>
                        {{-- <td><input type="text" name="subject3_1st_ca" id="s3_ca1" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject3_2nd_ca" id="s3_ca2" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject3_project" id="s3_pjkt" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject3_exam" id="s3_exam" size="4" maxlength="2" required></td> --}}
                        <td><input type="text" name="subject3_exam" id="overall3"  size="4" maxlength="3" value="{{$result->subject3_exam}}"></td>
                        <td><input type="text" name="subject3_grade" id="s3_grade" onfocus="calcOverall3()" size="4" maxlength="1" value="{{$result->subject3_grade}}"></td>
                        <td>
                            <input type="text" name="subject3_remarks" id="sub3_rmks" size="9"  value="{{$result->subject3_remarks}}" required>
                          
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject4" id="" required>
                                <option value="{{$result->subject4}}" selected>{{$result->subject4}}</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                               
                            </select>
                        </td>
                        {{-- <td><input type="text" name="subject4_1st_ca" id="s4_ca1" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject4_2nd_ca" id="s4_ca2" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject4_project" id="s4_pjkt" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject4_exam" id="s4_exam" size="4" maxlength="2" required></td> --}}
                        <td><input type="text" name="subject4_exam" id="overall4"  size="4" maxlength="3" value="{{$result->subject4_exam}}"></td>
                        <td><input type="text" name="subject4_grade" id="s4_grade" onfocus="calcOverall4()" size="4" maxlength="1" value="{{$result->subject4_grade}}"></td>
                        <td>
                            <input type="text" name="subject4_remarks" id="sub4_rmks" size="9" value="{{$result->subject4_remarks}}"  required>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject5" id="" required>
                                <option value="{{$result->subject5}}" selected>{{$result->subject5}}</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                                
                            </select>
                        </td>
                        {{-- <td><input type="text" name="subject5_1st_ca" id="s5_ca1" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject5_2nd_ca" id="s5_ca2" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject5_project" id="s5_pjkt" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject5_exam" id="s5_exam" size="4" maxlength="2" required></td> --}}
                        <td><input type="text" name="subject5_exam" id="overall5"  size="4" maxlength="3" value="{{$result->subject5_exam}}"></td>
                        <td><input type="text" name="subject5_grade" id="s5_grade" onfocus="calcOverall5()" size="4" maxlength="1" value="{{$result->subject5_grade}}"></td>
                        <td>
                            <input type="text" name="subject5_remarks" id="sub5_rmks" size="9" value="{{$result->subject5_remarks}}"  required>
                            
                            
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject6" id="" required>
                                <option value="{{$result->subject6}}" selected>{{$result->subject6}}</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                               
                            </select>
                        </td>
                        {{-- <td><input type="text" name="subject6_1st_ca" id="s6_ca1" size="4" maxlength="2" required ></td>
                        <td><input type="text" name="subject6_2nd_ca" id="s6_ca2" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject6_project" id="s6_pjkt" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject6_exam" id="s6_exam" size="4" maxlength="2" required></td> --}}
                        <td><input type="text" name="subject6_exam" id="overall6"  size="4" maxlength="3" value="{{$result->subject6_exam}}"></td>
                        <td><input type="text" name="subject6_grade" id="s6_grade" onfocus="calcOverall6()" size="4" maxlength="1" value="{{$result->subject6_grade}}"></td>
                        <td>
                            <input type="text" name="subject6_remarks" id="sub6_rmks" size="9" value="{{$result->subject6_remarks}}"  required>
                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject7" id="" required>
                                <option value="{{$result->subject7}}" selected>{{$result->subject7}}</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                               
                            </select>
                        </td>
                        {{-- <td><input type="text" name="subject7_1st_ca" id="s7_ca1" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject7_2nd_ca" id="s7_ca2" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject7_project" id="s7_pjkt" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject7_exam" id="s7_exam" size="4" maxlength="2" required></td> --}}
                        <td><input type="text" name="subject7_exam" id="overall7"  size="4" maxlength="3" value="{{$result->subject7_exam}}"></td>
                        <td><input type="text" name="subject7_grade" id="s7_grade"  onfocus="calcOverall7()" size="4" maxlength="1" value="{{$result->subject7_grade}}"></td>
                        <td>
                            <input type="text" name="subject7_remarks" id="sub7_rmks" size="9" value="{{$result->subject7_remarks}}"  required>
                          
                        </td>
                        
                    </tr>
                    
                </table>
                <div>
                    <hr>
                </div>
                <div class="row">
                    <div class="title"><strong>Grade Skills & General Character Traits</strong></div>
                    <div class="col-xs-12 col-sm-12 col-md-2">
                        <div class="form-group">
                            <strong>Recognition:</strong>
                            <select class="form-control" name="recognition" id="" required>
                                <option value="{{$result->recognition}}" selected>{{$result->recognition}}</option>
                                <option value="A">A</option> 
                                <option value="B">B</option> 
                                <option value="C">C</option> 
                                <option value="D">D</option> 
                                <option value="E">E</option>    
                            </select>
                            @error('reading')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div>
                   
                    <div class="col-xs-12 col-sm-12 col-md-2">
                        <div class="form-group">
                            <strong>Handwriting skill:</strong>
                            <select class="form-control" name="handwriting" id="" required>
                                <option value="{{$result->handwriting}}" selected>{{$result->handwriting}}</option>
                                <option value="A">A</option> 
                                <option value="B">B</option> 
                                <option value="C">C</option> 
                                <option value="D">D</option> 
                                <option value="E">E</option>    
                            </select>
                            @error('handwriting')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2">
                        <div class="form-group">
                            <strong>Punctuality:</strong>
                            <select class="form-control" name="punctuality" id="" required>
                                <option value="{{$result->punctuality}}" selected>{{$result->punctuality}}</option>
                                <option value="5">5</option> 
                                <option value="4">4</option> 
                                <option value="3">3</option> 
                                <option value="2">2</option> 
                                <option value="1">1</option>    
                            </select>
                            @error('punctuality')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2">
                        <div class="form-group">
                            <strong>Neatness:</strong>
                            <select class="form-control" name="neatness" id="" required>
                                <option value="{{$result->neatness}}" selected>{{$result->neatness}}</option>
                                <option value="5">5</option> 
                                <option value="4">4</option> 
                                <option value="3">3</option> 
                                <option value="2">2</option> 
                                <option value="1">1</option>    
                            </select>
                            @error('neatness')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-2">
                        <div class="form-group">
                            <strong>Attentiveness:</strong>
                            <select class="form-control" name="attentiveness" id="" required>
                                <option value="{{$result->attentiveness}}" selected>{{$result->attentiveness}}</option>
                                <option value="5">5</option> 
                                <option value="4">4</option> 
                                <option value="3">3</option> 
                                <option value="2">2</option> 
                                <option value="1">1</option>    
                            </select>
                            @error('attentiveness')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2">
                        <div class="form-group">
                            <strong>Speak Out:</strong>
                            <select class="form-control" name="speak_out" id="" required>
                                <option value="{{$result->speak_out}}" selected>{{$result->speak_out}}</option>
                                <option value="5">5</option> 
                                <option value="4">4</option> 
                                <option value="3">3</option> 
                                <option value="2">2</option> 
                                <option value="1">1</option>    
                            </select>
                            @error('speak_out')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2">
                        <div class="form-group">
                            <strong>Memory Work:</strong>
                            <select class="form-control" name="memory_work" id="" required>
                                <option value="{{$result->memory_work}}" selected>{{$result->memory_work}}</option>
                                <option value="5">5</option> 
                                <option value="4">4</option> 
                                <option value="3">3</option> 
                                <option value="2">2</option> 
                                <option value="1">1</option>    
                            </select>
                            @error('memory_work')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div>
                    {{-- <div class="col-xs-12 col-sm-12 col-md-2">
                        <div class="form-group">
                            <strong>Sports:</strong>
                            <select class="form-control" name="sports" id="" required>
                                <option value="" selected>Select Grade</option>
                                <option value="5">5</option> 
                                <option value="4">4</option> 
                                <option value="3">3</option> 
                                <option value="2">2</option> 
                                <option value="1">1</option>    
                            </select>
                            @error('sports')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div> --}}
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="form-group">
                            <strong>Cooperation with others:</strong>
                            <select class="form-control" name="cooperation_with_others" id="" required>
                                <option value="{{$result->cooperation_with_others}}" selected>{{$result->cooperation_with_others}}</option>
                                <option value="5">5</option> 
                                <option value="4">4</option> 
                                <option value="3">3</option> 
                                <option value="2">2</option> 
                                <option value="1">1</option>    
                            </select>
                            @error('cooperation_with_others')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div>
                    
                    {{-- <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="form-group">
                            <strong>Attitude to school work:</strong>
                            <select class="form-control" name="attitude_to_schoolwork" id="" required>
                                <option value="{{$result->attitude_to_schoolwork}}" selected>{{$result->attitude_to_schoolwork}}</option>
                                <option value="5">5</option> 
                                <option value="4">4</option> 
                                <option value="3">3</option> 
                                <option value="2">2</option> 
                                <option value="1">1</option>    
                            </select>
                            @error('attitude_to_schoolwork')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div> --}}
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="form-group">
                            <strong>Response to homework:</strong>
                            <select class="form-control" name="response_to_homework" id="" required>
                                <option value="{{$result->response_to_homework}}" selected>{{$result->response_to_homework}}</option>
                                <option value="5">5</option> 
                                <option value="4">4</option> 
                                <option value="3">3</option> 
                                <option value="2">2</option> 
                                <option value="1">1</option>    
                            </select>
                            @error('response_to_homework')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="form-group">
                            <strong>No of School Days:</strong>
                            <input class="form-control" type="text" name="no_of_school_days" value="{{$result->no_of_school_days}}"  size="4" maxlength="4">
                            @error('no_of_school_days')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="form-group">
                            <strong>No of Days Absent:</strong>
                            <input class="form-control" type="text" name="no_of_days_absent" value="{{$result->no_of_days_absent}}" size="4" maxlength="4">
                            @error('no_of_days_absent')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div>
                   
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Class Teacher's Comment:</strong>
                            <input type="text" name="teachers_comment" class="form-control" placeholder="Teacher's Comment" value="{{$result->teachers_comment}}" required>
                            @error('teachers_comment')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Head Teacher's Comment:</strong>
                            <input type="text" name="head_teachers_comment" class="form-control" placeholder="Teacher's Comment" value="{{$result->head_teachers_comment}}" required>
                            @error('head_teachers_comment')
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
                    <h3>Grades Guide:</h3><br>
                    [80-100]: A 
                        [70-79]:  B
                        [60-69]:  C 
                        [50-59]:  D 
                        [40-49]: E 
                         [0-39]:  F 
                </div>
            </div>
                <div class="mt-4">
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
            </div>
        </form>
    </div>
 

    <script src="{{asset('/assets/styles/result/preschool.js')}}"></script>
    

    
@endsection