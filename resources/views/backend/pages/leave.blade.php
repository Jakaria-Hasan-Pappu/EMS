@extends('backend.welcome')

@section('contents')

<h1>Leave list</h1>
<a href="{{route('leave.create')}}" class="btn btn-primary">Create leave</a>


<table class="table">
  <thead>
    <tr>
        <th scope="col">id</th>
      <th scope="col">Leavereason</th>
      <th scope="col">Fromdate</th>
      <th scope="col">Todate</th>
      <th scope="col">employee_id</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>


    @foreach($list as $data )

    <tr>

    <td>{{$data->id}}</td>
      <td>{{$data->leavereason}}</td>
      <td>{{$data->fromdate}}</td>
      <td>{{$data->todate}}</td>
      <td>{{$data->employee->name}}</td>




      <td>
        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>



@endsection
