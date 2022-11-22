@extends('backend.welcome')

@section('contents')

<h1>Attendance list</h1>
<a href="{{route('attendancecreate')}}" class="btn btn-primary">Create Attendance</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Date</th>
      <th scope="col">intime</th>
      <th scope="col">outtime</th>
      <th scope="col">Employee</th>
      
     
    </tr>
  </thead>
  <tbody>
    
  
    @foreach($list as $data )
    
    <tr>

    
      <td>{{$data->id}}</td>
      <td>{{$data->date}}</td>
      <td>{{$data->intime}}</td>
      <td>{{$data->outtime}}</td>
      <td>{{$data->employee->id}}</td>
    
     
      
      
      <td>
        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach
    
  </tbody>
</table>



@endsection
