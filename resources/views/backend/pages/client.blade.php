@extends('backend.welcome')

@section('contents')

<h1>Client list</h1>
<a href="{{route('clientcreate')}}" class="btn btn-primary">Create Client</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
      <th scope="col">company</th>
      
     
    </tr>
  </thead>
  <tbody>
    
  
    @foreach($list as $data )
    
    <tr>

    
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->company}}</td>
    
     
      
      
      <td>
        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach
    
  </tbody>
</table>



@endsection