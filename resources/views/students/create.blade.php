@extends('dashboard')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Student</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Student Registration Number:</strong>
                        <input type="text" name="regNumber" class="form-control" placeholder="Registration Number">
                        @error('regNumber')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Student First Name:</strong>
                        <input type="text" name="firstName" class="form-control" placeholder="First Name" id="text" pattern="[A-Za-z]{2,}">
                        @error('firstName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Student Middle Name:</strong>
                        <input type="text" name="middleName" class="form-control" placeholder="Middle Name" pattern="[A-Za-z]{2,}">
                        @error('middleName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Student Last Name:</strong>
                        <input type="text" name="lasttName" class="form-control" placeholder="Last Name" pattern="[A-Za-z]{2,}">
                        @error('lasttName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Gender:</strong>
                        <input type="text" name="gender" class="form-control" placeholder="Male">
                        @error('gender')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div> --}}
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Gender:</strong>
                        <select class="form-control" name="gender" aria-label="Default select example" required>
                            <option selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                        @error('gender')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Date of Birth:</strong>
                        <input type="date" name="dob" class="form-control" placeholder="dob">
                        @error('dob')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Nationality:</strong>
                        <input type="text" name="nationality" class="form-control" placeholder="Nationality" pattern="[A-Za-z]{2,}">
                        @error('nationality')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>State of Origin:</strong>
                        <input type="text" name="soorigin" class="form-control" placeholder="State of Origin" pattern="[A-Za-z]{2,}">
                        @error('soorigin')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>LGA:</strong>
                        <input type="text" name="lga" class="form-control" placeholder="LGA" pattern="[A-Za-z]{2,}">
                        @error('lga')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Allergies:</strong>
                        <input type="text" name="allergies" class="form-control" placeholder="List allergies seperated by comma if any" pattern="[A-Za-z]{2,}">
                        @error('allergies')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Parents Phone Number:</strong>
                        <input type="text" name="parentsPhone" class="form-control" placeholder="Parents Phone Number" pattern="[0-9]{11}">
                        @error('parentsPhone')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Assign Class to Student:</strong>
                        <select class="form-control" name="sclass" aria-label="Default select example">
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
                        @error('sclass')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Passport</label>
                    <input type="file" class="form-control" id="exampleFormControlFile1" name="imagename">
                    
                  </div>
                </div>
                <div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
            </div>
        </form>
    </div>

    <script>

        function validat_field()
        {
            var input = document.getElementById('text')
        }

    </script>
@endsection