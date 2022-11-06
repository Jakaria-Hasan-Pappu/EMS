@extends('backend.welcome')

@section('contents')

<h1>Designation List</h1>
<a href="{{route('designation.create')}}" class="btn btn-primary">Create designation</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">designation</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td>Pappu</td>
      <td>jr sd</td>
      <td>active</td>
    </tr>
    
  </tbody>
</table>

@endsection