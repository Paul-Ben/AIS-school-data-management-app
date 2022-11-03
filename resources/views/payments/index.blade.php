@extends('dashboard')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Search Student Payment</h2>
                </div>
                <div class="pull-right">
                    {{-- <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a> --}}
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('addPayment') }}" method="GET" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Student Registration Number:</strong>
                        <input type="text" name="searchData" class="form-control" placeholder="Registration Number">
                        @error('searchData')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                    </div>
                </div>
                <div>
                <button type="submit" class="btn btn-primary ml-3">Search</button>
            </div>
            </div>
            
                
            
        </form>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('payments.create') }}"> Add Student Payment</a>
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
                    <th>Reg Number</th>
                    <th>Session</th>
                    <th>Student Class</th>
                    <th>First Term</th>
                    <th>Second Term</th>
                    <th>Third Term</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        {{-- <td>{{ $payment->id }}</td> --}}
                        <td>{{ $payment->regNumber }}</td>
                        <td>{{ $payment->sessionName }}</td>
                        <td>{{ $payment->sclass }}</td>
                        <td>{{ $payment->first_term_fee }}</td>
                        <td>{{ $payment->second_term_fee }}</td>
                        <td>{{ $payment->third_term_fee }}</td>
                        <td>
                            <form action="{{ route('payments.destroy', $payment->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('payments.edit', $payment->id) }}">Edit</a>
                                <a class="btn btn-primary" href="{{ route('payments.show', $payment->id) }}">Print</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $payments->links() !!}
    </div>
    @endsection