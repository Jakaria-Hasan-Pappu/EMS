@extends('backend.welcome')

@section('contents')

<h1>Designation List</h1>
<a href="{{route('designation.create')}}" class="btn btn-primary">Create designation</a>


<table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">designation</th>
      <th scope="col">status</th>
      <th scope="col">Department</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($list as $data )
    
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->designation}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->department->name}}</td>
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