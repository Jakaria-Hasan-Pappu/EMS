@extends('backend.welcome')

@section('contents')
    <h1>Attendance list</h1>
    <a href="{{ route('attendancecreate') }}" class="btn btn-primary">Create Attendance</a>


    <table class="table">
        <thead>
            <tr>

                <th scope="col">id</th>

                <th scope="col">Date</th>
                <th scope="col">intime</th>
                <th scope="col">outtime</th>
                <th scope="col">Employee</th>
                <th scope="col">Action</th>


            </tr>
        </thead>
        <tbody>


            @foreach ($list as $key=>$data)
                <tr>

                    <td>{{$key+1}}</td>

                    <td>{{ $data->date }}</td>
                    <td>{{ $data->intime }}</td>
                    <td>{{ $data->outtime }}</td>
                    <td>{{ $data->employee->id }}</td>




                    <td>
                        <a href="{{route('attendance.edit',$data->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('attendance.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                        <a href="{{route('attendance.view',$data->id)}}" class="btn btn-primary">View</a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
