@extends('dashboard')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('payments.create') }}"> Add Student Payment</a>
                <a class="btn btn-primary" href="{{ route('payments.index') }}"> Back</a>
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
                <th>Term Fee Paid</th>
                <th>Amount</th>
                <th>Status</th>
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
                    <td>{{ $payment->term_fee }}</td>
                    <td>{{ $payment->Amount_paid }}</td>
                    <td>{{ $payment->fee_status }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('payments.edit', $payment->id) }}">Edit</a>
                            <a class="btn btn-primary" href="{{ route('payments.show', $payment->id) }}">Print</a>
                        {{-- <form action="{{ route('payments.destroy', $payment->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('payments.edit', $payment->id) }}">Edit</a>
                            <a class="btn btn-primary" href="{{ route('payments.show', $payment->id) }}">Print</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> --}}
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!! $payments->links() !!}
</div>
@endsection