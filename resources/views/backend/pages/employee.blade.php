@extends('backend.welcome')

@section('contents')

<h1>Employee list</h1>
<a href="{{route('employee.create')}}" class="btn btn-primary">Create employee</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">Department</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($list as $data )
    
    <tr>

    <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->password}}</td>
      <td>{{$data->department->id}}</td>
      <td>
        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach
    
  </tbody>
</table>
{{$list->links()}}


@endsection