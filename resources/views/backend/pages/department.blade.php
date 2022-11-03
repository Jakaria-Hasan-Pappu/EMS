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
      <th scope="col">RoomNo</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>

    <td scope="row">1</td>
      <td>Pappu</td>
      <td>pappu@gmail.com</td>
      <td>402</td>
    </tr>
    
  </tbody>
</table>

@endsection