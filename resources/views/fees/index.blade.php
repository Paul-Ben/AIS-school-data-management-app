@extends('dashboard')
@section('content')


    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                {{-- <div class="pull-left">
                    <h2>Alven International School SMS</h2>
                </div> --}}
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('fees.create') }}"> Create Fee</a>
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
                    <th>Session</th>
                    <th>Class</th>
                    <th>First Term Fee</th>
                    <th>Second Term Fee</th>
                    <th>Third Term Fee</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fees as $fee)
                    <tr>
                        
                        {{-- <td>{{ $fee->id }}</td> --}}
                        <td>{{ $fee->sessionName }}</td>
                        <td>{{ $fee->className }}</td>
                        <td>{{ $fee->firstTermfee }}</td>
                        <td>{{ $fee->secondTermfee }}</td>
                        <td>{{ $fee->thirdTermfee }}</td>
                       
                        <td>
                            <form action="{{ route('fees.destroy',$fee->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('fees.edit', $fee->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $fees->links() !!}
    </div>
    @endsection