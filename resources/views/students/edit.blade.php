@extends('dashboard')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Student</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('students.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Student Registration Number:</strong>
                        <input type="text" name="regNumber" value="{{ $student->regNumber }}" class="form-control"
                            placeholder="Registration Number">
                        @error('regNumber')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Student First Name:</strong>
                        <input type="text" name="firstName" value="{{ $student->firstName }}" class="form-control"
                            placeholder="Company name">
                        @error('firstName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Student Middle Name:</strong>
                        <input type="text" name="middleName" class="form-control" placeholder="Middle Name"
                            value="{{ $student->middleName }}">
                        @error('middleName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Student Last Name:</strong>
                        <input type="text" name="lasttName" class="form-control" placeholder="Last Name"
                            value="{{ $student->lasttName }}">
                        @error('lasttName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Student Gender:</strong>
                        <input type="text" name="gender" class="form-control" placeholder="Male"
                            value="{{ $student->gender }}">
                        @error('gender')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Student Date of Birth:</strong>
                        <input type="text" name="dob" class="form-control" placeholder="DOB"
                            value="{{ $student->dob }}">
                        @error('dob')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Nationality:</strong>
                        <input type="text" name="nationality" class="form-control" placeholder="Nationality" value="{{ $student->nationality}}">
                        @error('nationality')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>State of Origin:</strong>
                        <input type="text" name="soorigin" class="form-control" placeholder="State of Origin" value="{{ $student->soorigin}}">
                        @error('soorigin')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>LGA:</strong>
                        <input type="text" name="lga" class="form-control" placeholder="LGA" value="{{ $student->lga}}">
                        @error('lga')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Allergies:</strong>
                        <input type="text" name="allergies" class="form-control" placeholder="List allergies seperated by comma if any" value="{{ $student->allergies}}">
                        @error('allergies')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Parents Phone Number:</strong>
                        <input type="text" name="parentsPhone" value="{{ $student->parentsPhone }}" class="form-control"
                            placeholder="parents Phone">
                        @error('parentsPhone')
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
    @endsection