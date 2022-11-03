@extends('dashboard')
@section('content')
    

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Class Fee</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('fees.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('fees.update',$fee->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row pt-4">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Session:</strong>
                        <input type="text" name="sessionName" value="{{ $fee->sessionName }}" class="form-control"
                            placeholder="class name">
                        @error('sessionName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Class Name:</strong>
                        <input type="text" name="className" value="{{ $fee->className }}" class="form-control"
                            placeholder="class name">
                        @error('className')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>First Term Fee:</strong>
                        <input type="text" name="firstTermfee" value="{{ $fee->firstTermfee }}" class="form-control"
                            placeholder="Class fee">
                        @error('firstTermfee')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Second Term Fee:</strong>
                        <input type="text" name="secondTermfee" value="{{ $fee->secondTermfee }}" class="form-control"
                            placeholder="Class fee">
                        @error('secondTermfee')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Third Term Fee:</strong>
                        <input type="text" name="thirdTermfee" value="{{ $fee->thirdTermfee }}" class="form-control"
                            placeholder="Class fee">
                        @error('thirdTermfee')
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
    @endsection