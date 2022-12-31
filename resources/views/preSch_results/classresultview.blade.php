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
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

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
                @foreach ($results as $result)
                    <tr>
                        <td>{{$result->regNumber}}</td>
                        <td>{{ $result->fullName }}</td>
                        <td>{{$result->term}}</td>
                        <td>
                            
                            <form action="{{ route('deletePreSchResult',$result->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('viewPreSchResults', $result->id) }}">View</a>
                                <a class="btn btn-primary" href="{{ route('editPreSchResults',$result->id) }}">Edit</a>
                                
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