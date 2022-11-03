<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alven International School SMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Alven International School SMS</h2>
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
                    <th>S.No</th>
                    <th>Reg Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Parent Phone Number</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($student as $student) --}}
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->regNumber }}</td>
                        <td>{{ $student->firstName }}</td>
                        <td>{{ $student->lasttName }}</td>
                        <td>{{ $student->dob }}</td>
                        <td>{{ $student->parentsPhone }}</td>
                        <td>
                            {{-- <form action="{{ route('students.destroy',$student->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                    {{-- @endforeach --}}
            </tbody>
        </table>
       
    </div>
</body>
</html>