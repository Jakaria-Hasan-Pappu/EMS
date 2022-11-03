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
    </tr>
  </thead>
  <tbody>
    @foreach($list as $data )
    
    <tr>

    <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->password}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>



@endsection