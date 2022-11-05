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
                            <a class="btn btn-success" href="{{route('get-student')}}"> Submit Result</a>
                            <a class="btn btn-success" href=""> View Result</a>
                            <a class="btn btn-success" href=""> View Class</a>
                            <a class="btn btn-success" href=""> Search Student</a>
                        </div>
                    </th>
                    <th>
                        <div class=" mb-2">
                            
                        </div>
                    </th>
                   
                </tr>
            </thead>
           
        </table>
        
        
    </div>
@endsection