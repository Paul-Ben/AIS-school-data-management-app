@extends('dashboard')
@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                {{-- <h2>Alven International School SMS</h2> --}}
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('students.index') }}"> Back</a>
            </div>
        </div>
    </div>
    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif --}}

    
    <div class="row">
        <form action="{{ route('promote') }}" method="Post">                         
            @csrf
            @method('POST')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="form-group">
                    <strong>Current Class:</strong>
                    <select class="form-control" name="currentClass" aria-label="Default select example">
                        <option selected>Assign Student Class</option>
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
                    @error('currentClass')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="form-group">
                    <strong>Next Class:</strong>
                    <select class="form-control" name="nextClass" aria-label="Default select example">
                        <option selected>Assign Student Class</option>
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
                    @error('nextClass')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
                <button type="submit" class="btn btn-danger">Promote To Next Class</button>
            
        </form>
    </div>
 
</div>
@endsection