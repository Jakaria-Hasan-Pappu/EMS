@extends('backend.welcome')

@section('contents')

<h1>Project list</h1>
<a href="{{route('projectscreate')}}" class="btn btn-primary">Create project</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">image</th>
      <th scope="col">employee</th>
      <th scope="col">client</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>


    @foreach($list as $data )

    <tr>

    <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->description}}</td>
      <td>{{$data->deadline}}</td>

      <td>{{$data->employee->id}}</td>
      <td>{{$data->client->id}}</td>

      <td>
        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>



@endsection
