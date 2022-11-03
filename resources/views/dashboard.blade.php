
@extends('dashboard.layout')

@section('content')
<div>
    <h2>Welcome, you are logged in as <span>{{ Auth::user()->name }}</span> </h2>
</div>
@endsection