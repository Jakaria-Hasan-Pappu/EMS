@extends('backend.welcome')

@section('contents')

<h1>Project list</h1>
<a href="{{route('projectscreate')}}" class="btn btn-primary">Create project</a>


<table class="table">
  <thead>
    <tr>

      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">deadline</th>
      <th scope="col">image</th>
      <th scope="col">employee</th>
      <th scope="col">client</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>


    @foreach($list as $data )

    <tr>


      <td>{{$data->name}}</td>
      <td>{{$data->description}}</td>
      <td>{{$data->deadline}}</td>
      <td>


        <img width="100px" style="border-radius: 10px" src="{{url('/uploads/'.$data->image)}}" alt="projects_image">
    </td>

      <td>{{$data->employee->id}}</td>
      <td>{{$data->client->id}}</td>

      <td>
        <a href="{{route('projects.edit',$data->id)}}" class="btn btn-warning">Edit</a>
        <a href="{{route('projects.delete',$data->id)}}" class="btn btn-danger">Delete</a>
        <a href="{{route('projects.view',$data->id)}}" class="btn btn-primary">View</a>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>



@endsection
