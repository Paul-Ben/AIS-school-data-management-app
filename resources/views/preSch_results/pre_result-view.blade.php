<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('/assets/styles/bootstrap.min.css')}}" rel="stylesheet">
  
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                   
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('results.index') }}"> Back</a>
                    <a class="btn btn-warning" onclick="window.print()" href="#"> Print</a>
                </div>
            </div>
        </div>
    <div id="print">
        <div class="row col-md-12 text-center">
            <h2>ALVEN INTERNATIONAL SCHOOL</h2>
            <p>No.3A FMH & E Quarters, High Level, Makurdi.</p>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="text-center text-150">
                    <div>
                        <img src="{{ asset('/images/user.jpeg')}}" width="10%" height="50%" alt="">
                    </div>
                    <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                    <span class="text-default-d3"><input type="text" name="regNumber" id="" value="TERMLY REPORT SHEET" disabled></span>
                 
                </div>
            </div>
        </div>
            <div class="row">
                <table class=" mb-2" style="border: solid black 1px;">
                    <tr>
                        <td><strong>Registration Number: </strong>{{ $results->regNumber }}</td>
                        <td> <strong>Full Name:  </strong>{{ $results->fullName }}</td>
                        <td><strong>Session:  </strong>{{ $results->sessionName }}</td>
                    </tr>
                    <tr>
                        <td><strong>Term:  </strong>{{ $results->term }}</td>
                        <td><strong> Class:  </strong>{{ $results->sclass }}</td>
                        <td><strong>Term Ending:  </strong>{{ $results->termending }}</td>
                        
                    </tr>
                    <tr>
                        <td><strong>Next Term Begins: </strong> {{ $results->termbegins }}</td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Grades Legend:</strong>[80-100: A | 70-79:  B | 60-69:  C | 50-59:  D | 40-49:  E | 0-39: F] </td>
                        
                    </tr>
                </table>
                
                <table  class="table rounded-lg " style="border: solid black 1px;">
                    
                    <tr>
                        <td>
                            
                        </td>
                        
                        <td colspan="2"><h4>Exam Scores</h4></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td><h4>Subjects</h4> </td>
                        <td style="border-left: 1px solid black"><h6>Exams 70%</h6></td>
                        <td style="border-left: 1px solid black"><h6>Grade</h6></td>
                        <td style="border-left: 1px solid black"><h6>Remark</h6></td>
                        <td style="border-left: 1px solid black"><h6>General Character Trait</h6></td>
                        <td><h6>Grade</h6></td>
                    </tr>
                    <tr>
                        <td>{{ $results->subject1 }}</td>
                        <td class="p-3" style="border-left: 1px solid black">{{ $results->subject1_exam }}</td>
                        <td class="p-3" style="border-left: 1px solid black">{{ $results->subject1_grade }}</td>
                        <td class="" style="border-left: 1px solid black">{{ $results->subject1_remarks }}</td>
                        <td style="border-left: 1px solid black">Handwriting</td>
                        <td class="">{{$results->handwriting}}</td>
                        
                    </tr>
                    <tr>
                        <td>{{ $results->subject2 }}</td>
                        <td class="p-3" style="border-left: 1px solid black">{{ $results->subject2_exam }}</td>
                        <td class="p-3" style="border-left: 1px solid black">{{ $results->subject2_grade }}</td>
                        <td class="" style="border-left: 1px solid black">{{ $results->subject2_remarks }}</td>
                        <td style="border-left: 1px solid black">Recognition</td>
                        <td class="">{{$results->recognition}}</td>
                    </tr>
                    <tr>
                        <td>{{ $results->subject3 }}</td>                    
                        <td class="p-3" style="border-left: 1px solid black">{{ $results->subject3_exam }}</td>                      
                        <td class="p-3" style="border-left: 1px solid black">{{ $results->subject3_grade }}</td>
                        <td class="" style="border-left: 1px solid black">{{ $results->subject3_remarks }}</td>
                        <td style="border-left: 1px solid black">Memory Work</td>
                        <td class="">{{$results->memory_work}}</td>
                    </tr>
                    <tr>
                        <td>{{ $results->subject4 }}</td>                       
                        <td class="p-3" style="border-left: 1px solid black">{{ $results->subject4_exam }}</td>                        
                        <td class="p-3" style="border-left: 1px solid black">{{ $results->subject4_grade }}</td>
                        <td class="" style="border-left: 1px solid black">{{ $results->subject4_remarks }}</td>
                        <td style="border-left: 1px solid black">Neatness</td>
                        <td class="">{{$results->neatness}}</td>
                        
                    </tr>
                    <tr>
                        <td>{{ $results->subject5 }}</td>                       
                        <td class="p-3" style="border-left: 1px solid black">{{ $results->subject5_exam }}</td>
                        <td class="p-3" style="border-left: 1px solid black">{{ $results->subject5_grade }}</td>
                        <td class="" style="border-left: 1px solid black">{{ $results->subject5_remarks }}</td>
                        <td style="border-left: 1px solid black">Speak Out</td>
                        <td class="">{{$results->speak_out}}</td>
                    </tr>
                    <tr>
                        <td>{{ $results->subject6 }}</td>
                        <td class="p-3" style="border-left: 1px solid black">{{ $results->subject6_exam }}</td>
                        <td class="p-3" style="border-left: 1px solid black">{{ $results->subject6_grade }}</td>
                        <td class="" style="border-left: 1px solid black">{{ $results->subject6_remarks }}</td>
                        <td style="border-left: 1px solid black">Attentiveness</td>
                        <td class="">{{$results->attentiveness}}</td>
                    </tr>
                    <tr>
                        <td>{{ $results->subject7 }}</td>
                        <td class="p-3" style="border-left: 1px solid black">{{ $results->subject7_exam }}</td>
                        <td class="p-3" style="border-left: 1px solid black">{{ $results->subject7_grade }}</td>
                        <td class="" style="border-left: 1px solid black">{{ $results->subject7_remarks }}</td>
                        <td style="border-left: 1px solid black">Punctuality</td>
                        <td class="">{{$results->punctuality}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="p-3" style="border-left: 1px solid black"><strong>School Days</strong></td>
                        <td class="p-3" style="border-left: 1px solid black">{{$results->no_of_school_days}}</td>
                        <td class=""></td>
                        <td style="border-left: 1px solid black">Response to Homework</td>
                        <td class="">{{$results->response_to_homework}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="p-3" style="border-left: 1px solid black"><strong>Days Absent </strong></td>
                        <td class="p-3" style="border-left: 1px solid black">{{$results->no_of_days_absent}}</td>
                        <td class=""></td>
                        <td style="border-left: 1px solid black">Cooperation with others</td>
                        <td class="">{{$results->cooperation_with_others}}</td>
                    </tr>
                    <tr>
                        
                        <td><h5>Total Score: </h5> </td>
                        <td><h5>{{floatval($results->subject1_exam)+floatval($results->subject2_exam)+floatval($results->subject3_exam)+floatval($results->subject4_exam)+floatval($results->subject5_exam)+floatval($results->subject6_exam)+floatval($results->subject7_exam)}}<h5></td>
                       
                        <td colspan="2"><h5>Out of: 700</h5> </td>
                       
                        <td ><h5>Average: </h5></td>
                        <td colspan="2"><h5>{{ round((floatval($results->subject1_overall)+floatval($results->subject2_exam)+floatval($results->subject3_exam)+floatval($results->subject4_exam)+floatval($results->subject5_exam)+floatval($results->subject6_exam)+floatval($results->subject7_exam))/7,2)}}</h5></td>
                        
                    </tr>
                    <tr>
                        <td><strong> Class Teachers Comment:</strong></td>
                        <td colspan="2">{{$results->teachers_comment}}</td>
                        
                        <td></td>
                        <td><strong>Signature:</strong></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><strong> Head Teachers Comment:</strong></td>
                        <td colspan="2">{{$results->head_teachers_comment}}</td>
                        
                        <td></td>
                        <td><strong>Signature:</strong></td>
                        <td></td>
                    </tr>
                </table>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <h6></h6>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <h6></h6>
                </div>

                
        {{-- <table class="table">
        <tr>
        <td>
            <pre>
            Recognition:   (<strong>{{ $results->recognition }}</strong>)
            Handwriting:   (<strong>{{ $results->handwriting }}</strong>)
            Sports:        <strong>({{$results->punctuality}})</strong>
            Speakout:      <strong>({{$results->punctuality}})</strong>
            Neatness:      <strong>({{$results->punctuality}})</strong>
            Punctuality:   <strong>({{$results->punctuality}})</strong> 
            
            </pre>
        </td>
        <td> 
            <pre> 
            Memory Work:            <strong>({{$results->punctuality}})</strong>
            Attentiveness:          <strong>({{$results->punctuality}})</strong>
            Mental Ability:         <strong>({{$results->punctuality}})</strong>
            Response to homework:   <strong>({{$results->punctuality}})</strong>
            Attitude to shcool work:<strong>({{$results->punctuality}})</strong>
            
        </pre>
        </td>
        <td>
            <pre> 
                
            </pre>
        </td>
        </tr>
        <tr>  
            
        </tr>
        </table>              --}}

                {{-- <div class="col-xs-12 col-sm-12 border col-md-12">
                    <pre><strong>Class Teachers comment: <u>{{ $results->teachers_comment}}</u></strong>        <strong>Signature:</strong></pre>

                </div>
                <div class="col-xs-12 col-sm-12 border col-md-12">
                    <pre><strong>Head Teachers comment:  <u>{{ $results->head_teachers_comment}}</u></strong>                   <strong>Signature:</strong></pre>

                </div> --}}
                {{-- <br>
                <br>
            <div class="col-xs-12 col-sm-12 col-md-8">
               
                <h5>Signature:</h5>
           
            </div>
        <div class="col-xs-12 col-sm-12 col-md-8">
            <pre>


            </pre>
        </div>
        <br><br>
        <div class="col-xs-12 col-sm-12 col-md-4">
               <u>Class Teacher</u> 
       
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-4">
              

                <u>Head  Teacher</u>   
                
       
       
        </div> --}}
            </div>
       
        </div>
    </div>
</body>
</html>