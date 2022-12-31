{{-- @extends('dashboard')
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
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="form-group">
                        <strong>Student Class:</strong>
                        <input type="text" name="sclass" class="form-control" placeholder="Student Class" value="{{$student->sclass}}" >
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
                        <input type="text" name="sessionName" class="form-control" placeholder="Session" autofocus>
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
                            
                        </td>
                        <td colspan="3"><h4>Test Scores</h4></td>
                        
                        <td><h4>Exam Scores</h4></td>
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
                            <select class="" name="subject1" id="" required>
                                <option value="">Select Subject</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                                
                            </select>
                        </td>
                        <td><input type="text" class="score"  name="subject1_1st_ca" id="s1_ca1" size="4" oninput="checkValue()" maxlength="2" required ></td>
                        <td><input type="text" name="subject1_2nd_ca" id="s1_ca2" size="4" maxlength="2"  required ></td>
                        <td><input type="text" name="subject1_project" id="s1_pjkt" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject1_exam" id="s1_exam" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject1_overall" id="s1_overall" onfocus="calcOverall()" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject1_Grade" id="s1_grade" size="4"maxlength="1"></td>
                        <td>
                            <input type="text" name="subject1_remarks" id="sub1_rmks" size="9"   required>
                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject2" id="" required>
                                <option value="" selected>Select Subject</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                                
                            </select>
                        </td>
                        <td><input type="text" name="subject2_1st_ca" id="s2_ca1" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject2_2nd_ca" id="s2_ca2" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject2_project" id="s2_pjkt" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject2_exam" id="s2_exam" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject2_overall" id="overall2" onfocus="calcOverall2()" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject2_Grade" id="s2_grade" size="4" maxlength="1"></td>
                        <td>
                            <input type="text" name="subject2_remarks" id="sub2_rmks" size="9"   required>
                            
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject3" id="" required>
                                <option value="" selected>Select Subject</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                      
                            </select>
                        </td>
                        <td><input type="text" name="subject3_1st_ca" id="s3_ca1" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject3_2nd_ca" id="s3_ca2" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject3_project" id="s3_pjkt" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject3_exam" id="s3_exam" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject3_overall" id="overall3" onfocus="calcOverall3()" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject3_Grade" id="s3_grade" size="4" maxlength="1"></td>
                        <td>
                            <input type="text" name="subject3_remarks" id="sub3_rmks" size="9"   required>
                          
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject4" id="" required>
                                <option value="" selected>Select Subject</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                               
                            </select>
                        </td>
                        <td><input type="text" name="subject4_1st_ca" id="s4_ca1" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject4_2nd_ca" id="s4_ca2" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject4_project" id="s4_pjkt" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject4_exam" id="s4_exam" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject4_overall" id="overall4" onfocus="calcOverall4()" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject4_Grade" id="s4_grade" size="4" maxlength="1"></td>
                        <td>
                            <input type="text" name="subject4_remarks" id="sub4_rmks" size="9"   required>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject5" id="" required>
                                <option value="" selected>Select Subject</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                                
                            </select>
                        </td>
                        <td><input type="text" name="subject5_1st_ca" id="s5_ca1" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject5_2nd_ca" id="s5_ca2" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject5_project" id="s5_pjkt" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject5_exam" id="s5_exam" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject5_overall" id="overall5" onfocus="calcOverall5()" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject5_Grade" id="s5_grade" size="4" maxlength="1"></td>
                        <td>
                            <input type="text" name="subject5_remarks" id="sub5_rmks" size="9"   required>
                            
                            
                            </select>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject6" id="" required>
                                <option value="" selected>Select Subject</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                               
                            </select>
                        </td>
                        <td><input type="text" name="subject6_1st_ca" id="s6_ca1" size="4" maxlength="2" required ></td>
                        <td><input type="text" name="subject6_2nd_ca" id="s6_ca2" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject6_project" id="s6_pjkt" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject6_exam" id="s6_exam" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject6_overall" id="overall6" onfocus="calcOverall6()" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject6_Grade" id="s6_grade" size="4" maxlength="1"></td>
                        <td>
                            <input type="text" name="subject6_remarks" id="sub6_rmks" size="9"   required>
                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject7" id="" required>
                                <option value="" selected>Select Subject</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                               
                            </select>
                        </td>
                        <td><input type="text" name="subject7_1st_ca" id="s7_ca1" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject7_2nd_ca" id="s7_ca2" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject7_project" id="s7_pjkt" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject7_exam" id="s7_exam" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject7_overall" id="overall7" onfocus="calcOverall7()" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject7_Grade" id="s7_grade" size="4" maxlength="1"></td>
                        <td>
                            <input type="text" name="subject7_remarks" id="sub7_rmks" size="9"   required>
                          
                        </td>
                        
                    </tr> --}}
                    {{-- <tr>
                        <td>
                            <select class="" name="subject8" id="" required>
                                <option value="" selected>Select Subject</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                           
                            </select>
                        </td>
                        <td><input type="text" name="subject8_1st_ca" id="s8_ca1" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject8_2nd_ca" id="s8_ca2" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject8_project" id="s8_pjkt" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject8_exam" id="s8_exam" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject8_overall" id="overall8" onfocus="calcOverall8()" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject8_Grade" id="s8_grade" size="4" maxlength="1"></td>
                        <td>
                            <input type="text" name="subject8_remarks" id="sub8_rmks" size="9"   required>
                           
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <select class="" name="subject9" id="" required>
                                <option value="" selected>Select Subject</option>
                                @foreach ($subject2 as $subject)
                                <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option> 
                                @endforeach
                              
                               
                            </select>
                        </td>
                        <td><input type="text" name="subject9_1st_ca" id="s9_ca1" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject9_2nd_ca" id="s9_ca2" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject9_project" id="s9_pjkt" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject9_exam" id="s9_exam" size="4" maxlength="2" required></td>
                        <td><input type="text" name="subject9_overall" id="overall9" onfocus="calcOverall9()" size="4" maxlength="3"></td>
                        <td><input type="text" name="subject9_Grade" id="s9_grade" size="4" maxlength="1"></td>
                        <td>
                            <input type="text" name="subject9_remarks" id="sub9_rmks" size="9"   required>
                          
                        </td>
                        
                    </tr> --}}
                {{-- </table>
                <div>
                    <hr>
                </div>
                <div class="row">
                    <div class="title"><strong>Grade Skills & General Character Traits</strong></div>
                    <div class="col-xs-12 col-sm-12 col-md-2">
                        <div class="form-group">
                            <strong>Reading skill:</strong>
                            <select class="form-control" name="reading" id="" required>
                                <option value="" selected>Select Grade</option>
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
                                <option value="" selected>Select Grade</option>
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
                                <option value="" selected>Select Grade</option>
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
                                <option value="" selected>Select Grade</option>
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
                            <strong>Mental Ability:</strong>
                            <select class="form-control" name="mental_ability" id="" required>
                                <option value="" selected>Select Grade</option>
                                <option value="5">5</option> 
                                <option value="4">4</option> 
                                <option value="3">3</option> 
                                <option value="2">2</option> 
                                <option value="1">1</option>    
                            </select>
                            @error('mental_ability')
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
                                <option value="" selected>Select Grade</option>
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
                                <option value="" selected>Select Grade</option>
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
                                <option value="" selected>Select Grade</option>
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
                    <div class="col-xs-12 col-sm-12 col-md-2">
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
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="form-group">
                            <strong>Cooperation with others:</strong>
                            <select class="form-control" name="cooperation_with_others" id="" required>
                                <option value="" selected>Select Grade</option>
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
                    
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="form-group">
                            <strong>Attitude to school work:</strong>
                            <select class="form-control" name="attitude_to_schoolwork" id="" required>
                                <option value="" selected>Select Grade</option>
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
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="form-group">
                            <strong>Response to homework:</strong>
                            <select class="form-control" name="response_to_homework" id="" required>
                                <option value="" selected>Select Grade</option>
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
                   
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <div class="form-group">
                            <strong>Class Teacher's Comment:</strong>
                            <input type="text" name="tComment" class="form-control" placeholder="Teacher's Comment"  required>
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
                            <input type="text" name="htComment" class="form-control" placeholder="Teacher's Comment"  required>
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
 

    <script src="{{asset('/assets/styles/result/results.js')}}"></script>
    

    
@endsection --}}