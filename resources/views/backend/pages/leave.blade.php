@extends('backend.welcome')

@section('contents')

<h1>Leave list</h1>
<a href="{{route('leave.create')}}" class="btn btn-primary">Create leave</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">quantity</th>
      <th scope="col">status</th>
      <th scope="col">designation</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    
  
    @foreach($list as $data )
    
    <tr>

    <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->designation}</td>
     
      
      
      <td>
        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach
    
  </tbody>
</table>



@endsection