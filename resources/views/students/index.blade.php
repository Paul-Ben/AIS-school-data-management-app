@extends('dashboard')
@section('content')
    <div class="container mt-2">
       
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        <div class=" mb-2">
                            <a class="btn btn-success" href="{{ route('students.create') }}"> Create Student</a>
                            <a class="btn btn-success" href="{{ route('view-students') }}"> View All Students</a>
                            <a class="btn btn-success" href="{{ route('search') }}"> Search Student</a>
                        </div>
                    </th>
                    <th>
                        <div class=" mb-2">
                            
                        </div>
                    </th>
                   
                </tr>
            </thead>
           
        </table>
        <div class="card bg-warning rounded p-3 m-1 col-md-3">
            <h1 style="text-align: center; color:white ">
                {{$students->count()}}
            </h1>
            <h2 style="text-align: center">
               Students Registered
            </h2>
        </div>
        
    </div>
@endsection