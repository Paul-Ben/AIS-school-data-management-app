@extends('dashboard')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Payment Records for {{ $payingStudent->regNumber }} | {{ $payingStudent->firstName }} {{ $payingStudent->lastName }}</h2>
                </div>
                <div class="pull-right mb-2">
                    
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
                        <td><a  href="{{ route('print',$payment->id) }}">{{ $payment->first_term_fee }}</a></td>
                        <td>{{ $payment->second_term_fee }}</td>
                        <td>{{ $payment->third_term_fee }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('print',$payment->id) }}">Edit</a>
                           
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
       
    </div>
    
</div>
@endsection