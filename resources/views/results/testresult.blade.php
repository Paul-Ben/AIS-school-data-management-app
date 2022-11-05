@extends('dashboard')
@section('content')

<div>
    <form action="" method="post">
    <input type="text" name="name" id="" value="{{ $student->regNumber}}">
    <input type="text" name="name" id="" value="{{$student->firstName}} {{$student->lasttName}}">
    <input type="text" name="name" id="" value="{{$student->gender}}">
    <input type="text" name="name" id="" value="{{$student->sclass}}">


    <input type="submit" value="Submit" class="btn btn-primary">

</form>
</div>



@endsection