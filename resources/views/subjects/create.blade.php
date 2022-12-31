@extends('dashboard')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Add a Subject.</h2>
            </div>
            <div class="pull-right " >
                <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-warning">
            <p>{{ $message }}</p>
        </div>
    @endif

    
    <div class="mb-3">

    </div>
    <div class="container mt-2">
        <form action="{{ route('subjects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Subject Name/Title:</strong>
                        <input type="text" name="subject_name" class="form-control" placeholder="Subject ">
                        @error('subject_name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Subject ID:</strong>
                        <input type="text" name="subject_id" class="form-control" placeholder="Subject Id" value="ALV-{{rand(0001,1000)}}">
                        @error('subject_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Subject Teacher:</strong>
                        <input type="text" name="subject_teacher" class="form-control" placeholder="Subject Teacher">
                        @error('subject_teacher')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Student Class:</strong>
                        <select class="form-control" name="class" aria-label="Default select example">
                            <option selected>Select Student Class</option>
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
                        @error('class')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
              <div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
              </div>
            </div>
        </form>
        </div>
</div>
@endsection