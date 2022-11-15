@extends('dashboard')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Search Class result</h2>
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
    <form action="{{route('get-class-result')}}" method="GET" enctype="multipart/form-data">
        @csrf
        <div class="row">
            {{-- <div class="col-xs-12 col-sm-12 col-md-3">
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
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="form-group">
                    <strong>Session:</strong>
                    <input type="text" name="sessionName" class="form-control" placeholder="Session">
                    @error('sessionName')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
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
                    <strong>Select Class:</strong>
                    <select class="form-control" name="sclass" aria-label="Default select example">
                        <option selected>Select Class</option>
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
        <div >
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>
</div>


@endsection