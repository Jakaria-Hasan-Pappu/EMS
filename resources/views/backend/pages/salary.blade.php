@extends('backend.welcome')

@section('contents')

<h1>Salary list</h1>
<a href="{{route('salarycreate')}}" class="btn btn-primary">Create salary</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">amount</th>
      <th scope="col">month</th>
      <th scope="col">status</th>
      <th scope="col">employee</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    
  
    @foreach($list as $data )
    
    <tr>

    <td>{{$data->id}}</td>
      <td>{{$data->amount}}</td>
      <td>{{$data->month}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->employee}</td>
     
      
      
      <td>
        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach
    
  </tbody>
</table>



@endsection