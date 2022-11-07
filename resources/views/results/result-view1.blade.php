<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('/assets/styles/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class=" mb-2">
                    
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('results.index') }}"> Back</a>
                    <a class="btn btn-warning" onclick="window.print()" href="#"> Print</a>
                </div>
            </div>
        </div>
        <div class="row col-md-12 text-center">
            <h2>ALVEN INTERNATIONAL SCHOOL</h2>
            <p>No.3 HUDCO Quarters, High Level, Makurdi.</p>
        </div>
        {{-- <form action="{{ route('results.store') }}" method="POST" enctype="multipart/form-data">
            @csrf --}}
            <div class="row">
                <div class="col-12">
                    <div class="text-center text-150">
                        <div>
                            <img src="{{ asset('/images/user.jpeg')}}" width="10%" height="45%" alt="">
                        </div>
                        <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                        <span class="text-default-d3"><input type="text" name="regNumber" id="" value="TERMLY REPORT SHEET" disabled></span>
                     
                    </div>
                </div>
            </div>
            <div class="row">
                
                <table class="border mb-2">
                    <tr>
                        <td><strong>Registration Number: </strong>{{ $result->regNumber }}</td>
                        <td> <strong>Full Name:  </strong>{{ $result->fullName }}</td>
                        <td><strong>Session:  </strong>{{ $result->sessionName }}</td>
                    </tr>
                    <tr>
                        <td><strong>Term:  </strong>{{ $result->term }}</td>
                        <td><strong> Class:  </strong>{{ $result->sclass }}</td>
                        <td><strong>Term Ending:  </strong>{{ $result->termending }}</td>
                    </tr>
                    <tr>
                        <td><strong>Next Term Begins: </strong> {{ $result->termbegins }}</td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Grades Legend:</strong>[80-100: A | 70-79:  B | 60-69:  C | 50-59:  D | 40-49:  E | 0-39: F] </td>
                        
                    </tr>
                </table>
                
                <table class="table border border-primary rounded-lg " >
                    
                    <tr>
                        <td>
                            
                        </td>
                        <td colspan="3"><h4>Test Scores</h4></td>
                        <td colspan="2"><h4>Exam Scores</h4></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td><h4>Subjects</h4> </td>
                        <td><h6>1st CA 10%</h6></td>
                        <td><h6>2nd CA 10%</h6></td>
                        <td><h6>Project 10%</h6></td>
                        <td><h6>Exams 70%</h6></td>
                        <td><h6>Overall</h6></td>
                        <td><h6>Grade</h6></td>
                        <td><h6>Remark</h6></td>
                    </tr>
                    <tr>
                        <td>{{ $result->subject1 }}</td>
                        <td class="p-3">{{ $result->subject1_1st_ca }}</td>
                        <td class="p-3">{{ $result->subject1_2nd_ca }}</td>
                        <td class="p-3">{{ $result->subject1_project }}</td>
                        <td class="p-3">{{ $result->subject1_exam }}</td>
                        <td class="p-3">{{ $result->subject1_overall }}</td>
                        <td class="p-3">{{ $result->subject1_Grade }}</td>
                        <td class="">{{ $result->subject1_remarks }}</td>
                        
                    </tr>
                    <tr>
                        <td>{{ $result->subject2 }}</td>
                        <td class="p-3">{{ $result->subject2_1st_ca }}</td>
                        <td class="p-3">{{ $result->subject2_2nd_ca }}</td>
                        <td class="p-3">{{ $result->subject2_project }}</td>
                        <td class="p-3">{{ $result->subject2_exam }}</td>
                        <td class="p-3">{{ $result->subject2_overall }}</td>
                        <td class="p-3">{{ $result->subject2_Grade }}</td>
                        <td class="">{{ $result->subject2_remarks }}</td>
                        
                    </tr>
                    <tr>
                        <td>{{ $result->subject3 }}</td>
                        <td class="p-3">{{ $result->subject3_1st_ca }}</td>
                        <td class="p-3">{{ $result->subject3_2nd_ca }}</td>
                        <td class="p-3">{{ $result->subject3_project }}</td>
                        <td class="p-3">{{ $result->subject3_exam }}</td>
                        <td class="p-3">{{ $result->subject3_overall }}</td>
                        <td class="p-3">{{ $result->subject3_Grade }}</td>
                        <td class="">{{ $result->subject3_remarks }}</td>
                        
                    </tr>
                    <tr>
                        <td>{{ $result->subject4 }}</td>
                        <td class="p-3">{{ $result->subject4_1st_ca }}</td>
                        <td class="p-3">{{ $result->subject4_2nd_ca }}</td>
                        <td class="p-3">{{ $result->subject4_project }}</td>
                        <td class="p-3">{{ $result->subject4_exam }}</td>
                        <td class="p-3">{{ $result->subject4_overall }}</td>
                        <td class="p-3">{{ $result->subject4_Grade }}</td>
                        <td class="">{{ $result->subject4_remarks }}</td>
                        
                    </tr>
                    <tr>
                        <td>{{ $result->subject5 }}</td>
                        <td class="p-3">{{ $result->subject5_1st_ca }}</td>
                        <td class="p-3">{{ $result->subject5_2nd_ca }}</td>
                        <td class="p-3">{{ $result->subject5_project }}</td>
                        <td class="p-3">{{ $result->subject5_exam }}</td>
                        <td class="p-3">{{ $result->subject5_overall }}</td>
                        <td class="p-3">{{ $result->subject5_Grade }}</td>
                        <td class="">{{ $result->subject5_remarks }}</td>
                        
                    </tr>
                    <tr>
                        <td>{{ $result->subject6 }}</td>
                        <td class="p-3">{{ $result->subject6_1st_ca }}</td>
                        <td class="p-3">{{ $result->subject6_2nd_ca }}</td>
                        <td class="p-3">{{ $result->subject6_project }}</td>
                        <td class="p-3">{{ $result->subject6_exam }}</td>
                        <td class="p-3">{{ $result->subject6_overall }}</td>
                        <td class="p-3">{{ $result->subject6_Grade }}</td>
                        <td class="">{{ $result->subject6_remarks }}</td>
                        
                    </tr>
                    <tr>
                        <td>{{ $result->subject7 }}</td>
                        <td class="p-3">{{ $result->subject7_1st_ca }}</td>
                        <td class="p-3">{{ $result->subject7_2nd_ca }}</td>
                        <td class="p-3">{{ $result->subject7_project }}</td>
                        <td class="p-3">{{ $result->subject7_exam }}</td>
                        <td class="p-3">{{ $result->subject7_overall }}</td>
                        <td class="p-3">{{ $result->subject7_Grade }}</td>
                        <td class="">{{ $result->subject7_remarks }}</td>
                        
                    </tr>
                    <tr>
                        <td>{{ $result->subject8 }}</td>
                        <td class="p-3">{{ $result->subject8_1st_ca }}</td>
                        <td class="p-3">{{ $result->subject8_2nd_ca }}</td>
                        <td class="p-3">{{ $result->subject8_project }}</td>
                        <td class="p-3">{{ $result->subject8_exam }}</td>
                        <td class="p-3">{{ $result->subject8_overall }}</td>
                        <td class="p-3">{{ $result->subject8_Grade }}</td>
                        <td class="">{{ $result->subject8_remarks }}</td>
                        
                    </tr>
                    <tr>
                        <td>{{ $result->subject9 }}</td>
                        <td class="p-3">{{ $result->subject9_1st_ca }}</td>
                        <td class="p-3">{{ $result->subject9_2nd_ca }}</td>
                        <td class="p-3">{{ $result->subject9_project }}</td>
                        <td class="p-3">{{ $result->subject9_exam }}</td>
                        <td class="p-3">{{ $result->subject9_overall }}</td>
                        <td class="p-3">{{ $result->subject9_Grade }}</td>
                        <td class="">{{ $result->subject9_remarks }}</td>
                        
                    </tr>
                    
                    <tr>
                        
                        <td><h5>Total Score:</h5> </td>
                        <td></td>
                        <td></td>
                        <td colspan="2"><h5>Out of:</h5> </td>
                        {{-- <td></td> --}}
                        <td></td>
                        <td colspan="2"><h5>Average:</h5></td>
                        
                    </tr>
                    <tr>
                        <td colspan="2">Head Teacher's Comment:</td>
                        
                        <td colspan="2">{{ $result->htComment}}</td>
                       
                        <td colspan="2">Teacher's Comment:</td>
                        
                        <td colspan="2">{{ $result->tComment}}</td>
                        
                    </tr>


                 
                </table>
                
            <div class="col-xs-12 col-sm-12 col-md-6">
               
                <h5>Stamp/Signature:</h5>
                <pre>
                    
                    
                    Class Teacher: ________________________

                    Head  Teacher: ________________________
                    
                </pre>
           
        </div>
            </div>
    </div>
    <script>
        

    </script>
</body>
</html>