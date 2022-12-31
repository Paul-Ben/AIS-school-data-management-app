@extends('dashboard')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Search Subjects by Class</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>
                </div>
            </div>
        </div>
        <div>
        @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        </div>
        <form action="{{ route('viewSubjectsbyClass') }}" method="GET" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Choose Class to View:</strong>
                        {{-- <input type="text" name="searchData" class="form-control" placeholder="Registration Number"> --}}
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
                        
                    </div>
                </div>
                
            </div>
            <div >
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
    @endsection