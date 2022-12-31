@extends('dashboard')
@section('content')


    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                {{-- <div class="pull-left">
                    <h2>Alven International School SMS</h2>
                </div> --}}
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('dashboard') }}"> Back</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    {{-- <th>S.No</th> --}}
                    <th>Subject Name</th>
                    <th>Subject ID</th>
                    <th>Class</th>
                    <th>Subject Teacher</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                    <tr>
                        
                        {{-- <td>{{ $fee->id }}</td> --}}
                        <td>{{ $subject->subject_name }}</td>
                        <td>{{ $subject->subject_id }}</td>
                        <td>{{ $subject->class }}</td>
                        <td>{{ $subject->subject_teacher }}</td>
                        
                       
                        <td>
                            <form action="{{ route('subjects.destroy', $subject->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('subjects.edit', $subject->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        
    </div>
    @endsection