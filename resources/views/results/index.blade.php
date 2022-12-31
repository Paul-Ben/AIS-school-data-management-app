@extends('dashboard')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Search student to submit result</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if(session('success'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('success') }}
    </div>
    @endif
    <form action="{{ route('testsearch') }}" method="GET" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Student Registration Number:</strong>
                    <input type="text" name="searchData" class="form-control" placeholder="Registration Number">
                    @error('searchData')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                </div>
            </div>
            
        </div>
        <div >
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>
</div>


@endsection
{{-- @extends('dashboard')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Search Class</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
                    <a class="btn btn-success" href="{{route('get-student')}}"> Submit Result</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('selectclass') }}" method="GET" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Choose Class to View:</strong>
                        <select class="form-control" name="searchData" aria-label="Default select example">
                            <option selected>Choose a class to view</option>
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

                        @error('searchData')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                    </div>
                </div>
                
            </div>
            <div >
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
    @endsection --}}

{{-- @extends('dashboard')
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
                            <a class="btn btn-success" href="{{route('selectclass')}}"> Submit Result</a>
                            <a class="btn btn-success" href="{{route('get-student')}}"> Submit Result</a>
                            <a class="btn btn-success" href="{{route('result-view')}}"> View Result</a>
                            <a class="btn btn-success" href="{{route('search-class-result')}}"> View Class</a>
                            
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
@endsection --}}