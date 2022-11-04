@extends('dashboard')
@section('content')
    

<!-- Student Profile -->
<link rel="stylesheet" href="{{ asset('assets/styles/studentProfile.css')}}">
<div class="student-profile py-4">
    <div class="container">
      <div class="row">
        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
      </div>
        <div class="col-lg-4">
          <div class="card shadow-sm">
            <div class="card-header bg-transparent text-center">
              <img class="profile_img" src="{{ asset($student->imagename)}}" alt="">
              <h3>{{ $student->firstName }} {{ $student->lasttName }}</h3>
            </div>
            <div class="card-body">
              <p class="mb-0"><strong class="pr-1">Student ID: </strong>{{ $student->regNumber }}</p>
              <p class="mb-0"><strong class="pr-1">Class: </strong>{{ $student->sclass }}</p>
              <p class="mb-0"><strong class="pr-1">Parents Phone: </strong>{{ $student->parentsPhone }}</p>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card shadow-sm">
            <div class="card-header bg-transparent border-0">
              <h3 class="mb-0"><i class="fa fa-clone pr-1"></i>General Information</h3>
            </div>
            <div class="card-body pt-0">
              
              <table class="table table-bordered">
                <tr>
                  <th width="30%">Nationality</th>
                  <td width="2%">:</td>
                  <td>{{ $student->nationality }}</td>
                </tr>
                <tr>
                  <th width="30%">State	</th>
                  <td width="2%">:</td>
                  <td>{{ $student->soorigin }}</td>
                </tr>
                <tr>
                  <th width="30%">Gender</th>
                  <td width="2%">:</td>
                  <td>{{ $student->gender }}</td>
                </tr>
                <tr>
                  <th width="30%">Date of Birth</th>
                  <td width="2%">:</td>
                  <td>{{ $student->dob }}</td>
                </tr>
                <tr>
                  <th width="30%">Allergies</th>
                  <td width="2%">:</td>
                  <td>{{ $student->allergies }}</td>
                </tr>
                <tr>
                  <th width="30%">Edit/Delete Details</th>
                  <td width="2%">:</td>
                  <td>
                    <form action="{{ route('students.destroy',$student->id) }}" method="Post"> 
                      <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                  
                  </td>
                </tr>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection