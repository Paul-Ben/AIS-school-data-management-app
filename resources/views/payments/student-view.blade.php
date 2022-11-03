@extends('dashboard')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Payment Records for {{ $payingStudent->regNumber }} | {{ $payingStudent->firstName }} {{ $payingStudent->lastName }}</h2>
                </div>
                <div class="pull-right mb-2">
                    {{-- <a class="btn btn-success" href="{{ route('students.create') }}"> Create Student</a> --}}
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
                    <th>Session</th>
                    <th>Reg Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Class</th>
                    <th>First Term Fee Status</th>
                    <th>Second Term Fee Status</th>
                    <th>Third Term Fee Status</th>
                    {{-- <th width="280px">Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $payment->sessionName }}</td>
                        <td>{{ $payment->regNumber }}</td>
                        <td>{{ $payment->firstName }}</td>
                        <td>{{ $payment->lastName }}</td>
                        <td>{{ $payment->sclass }}</td>
                        <td>{{ $payment->first_term_fee }}</td>
                        <td>{{ $payment->second_term_fee }}</td>
                        <td>{{ $payment->third_term_fee }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('payments.show', $payment->id) }}">Print</a>
                            {{-- <form action="{{ route('payments.destroy',$payment->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('payments.edit',$payment->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
       
    </div>
    {{-- <div class="container mt-2">
    <form action="{{ route('payments.destroy', $pay->id) }} " method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Payment Session:</strong>
                    <input type="text" name="sessionName" class="form-control" placeholder="2022/2023">
                    @error('sessionName')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>First Name:</strong>
                    <input type="text" name="firstName" class="form-control" placeholder="First Name" value="{{ $pay->firstName }}" >
                    @error('firstName')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Last Name:</strong>
                    <input type="text" name="lastName" class="form-control" placeholder="Last Name" value="{{ $pay->lastName }}">
                    @error('lastName')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Student Class:</strong>
                    <input type="text" name="sclass" class="form-control" placeholder="Student Class" value="{{ $pay->sclass }}" > 
                    @error('sclass')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Fist Term Fees:</strong>
                    <input type="text" class="form-control" value="{{ $pay->first_term_fee }}" > 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Second Term Fees:</strong>
                    <input type="text" class="form-control" value="{{ $pay->second_term_fee }}" > 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group">
                    <strong>Third Term Fees:</strong>
                    <input type="text" class="form-control" value="{{ $pay->third_term_fee }}" > 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <hr>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <hr>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('payments.edit',$pay->id) }}">Edit</a>
            </div>
          <div>
            <button type="submit" class="btn btn-danger ml-3">Delete</button>
          </div>
        </div>
    </form>
    </div> --}}
</div>
@endsection