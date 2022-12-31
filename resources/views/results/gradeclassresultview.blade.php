@extends('dashboard')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    {{-- <h2>Alven International School SMS</h2> --}}
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('results.index') }}"> Back</a>
                </div>
            </div>
        </div>
        {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif --}}

        <div class="pull-left">
            <h2>List of Results for {{$classname->sclass}}</h2>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Registration Number</th>
                    <th>Name</th>
                    <th>Term</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grade1_6_results as $grade1_6_result)
                    <tr>
                        <td>{{$grade1_6_result->regNumber}}</td>
                        <td>{{ $grade1_6_result->fullName }}</td>
                        <td>{{$grade1_6_result->term}}</td>
                        <td>
                            
                            <form action="{{ route('results.destroy',$grade1_6_result->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('showgraderesult', $grade1_6_result->id) }}">View</a>
                                <a class="btn btn-primary" href="{{ route('results.edit',$grade1_6_result->id) }}">Edit</a>
                                
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