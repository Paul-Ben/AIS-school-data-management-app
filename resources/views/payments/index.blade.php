@extends('dashboard')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Search Student Payment</h2>
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
                    <a class="btn btn-success" href="{{route('all_payments')}}">View All Payments</a>
                    <a class="btn btn-success" href="{{route('class_payments_index')}}">View Class Payments</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        
        
    </div>
    @endsection