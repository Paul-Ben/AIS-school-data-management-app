@extends('dashboard')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Update Student Payment.</h2>
                </div>
                <div class="pull-right " >
                    <a class="btn btn-primary" href="{{ route('payments.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif

        
        <div class="mb-3">

        </div>
        <div class="container mt-2">
            <form action="{{ route('payments.update', $payment->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Payment Session:</strong>
                            <input type="text" name="sessionName" class="form-control" placeholder="2022/2023" value="{{ $payment->sessionName}}">
                            @error('sessionName')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Registration Number:</strong>
                            <input type="text" name="regNumber" class="form-control" placeholder="Registration Number" value="{{ $payment->regNumber }}">
                            @error('regNumber')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>First Name:</strong>
                            <input type="text" name="firstName" class="form-control" placeholder="First Name" value="{{ $payment->firstName }}">
                            @error('firstName')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
        
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            <input type="text" name="lastName" class="form-control" placeholder="Last Name" value="{{ $payment->lastName }}">
                            @error('lastName')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Term Fee:</strong>
                            <select class="form-control" name="term_fee" aria-label="Default select example">
                                <option selected>{{$payment->term_fee}}</option>
                                <option value="First Term">First Term</option>
                                <option value="Second Term">Second Term</option>
                                <option value="Third Term">Third Term</option>
                                
                                </select>
                            @error('term_fee')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Amount:</strong>
                            <input type="text" name="Amount_paid" class="form-control" value="{{$payment->Amount_paid}}" placeholder="Amount paid">
                            @error('Amount_paid')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Term Fee Status:</strong>
                            <select class="form-control" name="fee_status" aria-label="Default select example">
                                <option selected>{{$payment->fee_status}}</option>
                                <option value="Paid">Paid</option>
                                <option value="Unpaid">Unpaid</option>
                                <option value="Part Payment">Part Payment</option>
                                
                                </select>
                            @error('fee_status')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                            
                        </div>
                    </div>
        
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <strong>Student Class:</strong>
                            <select class="form-control" name="sclass" aria-label="Default select example">
                                <option selected>{{ $payment->sclass }}</option>
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
                  <div>
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                  </div>
                </div>
            </form>
            </div>
    </div>
    @endsection