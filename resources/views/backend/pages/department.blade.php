@extends('backend.welcome')

@section('contents')

<h1>Department List</h1>
<a href="{{route('department.create')}}" class="btn btn-primary">Create department</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">room</th>

      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($list as $data )

    <tr>

    <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->room}}</td>


      <td>
        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
        <a href="" class="btn btn-primary">View</a>
      </td>

    </tr>
    @endforeach


  </tbody>
</table>
{{$list->links()}}

@endsection
