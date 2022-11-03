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

        <div class="pull-left">
            <h2>List of All Students</h2>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Passport</th>
                    <th>Reg Number</th>
                    <th>Name</th>
                    
                    <th>Class</th>
                    
                    <th>Parent Phone Number</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td><img src="{{ asset($student->imagename)}}" width="50" height="50" alt=""></td>
                        <td>{{ $student->regNumber }}</td>
                        <td>{{ $student->firstName }} {{ $student->lasttName }}</td>
                       
                        <td>{{ $student->sclass }}</td>
                       
                        <td>{{ $student->parentsPhone }}</td>
                        <td>
                            
                            <form action="{{ route('students.destroy',$student->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('students.show', $student->id) }}">View</a>
                                <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
                                
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $students->links() !!}
    </div>
@endsection