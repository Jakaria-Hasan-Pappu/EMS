@extends('backend.welcome')

@section('contents')

<h1>Leavetype list</h1>
<a href="{{route('leavetype.create')}}" class="btn btn-primary">Create leavetype</a>


<table class="table">
  <thead>
    <tr>
        <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">balance</th>

      
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>


    @foreach($list as $data )

    <tr>

    <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->balance}}</td>






      <td>
        <a href="{{route('leavetype.edit',$data->id)}}" class="btn btn-warning">Edit</a>
        <a href="{{route('leavetype.delete',$data->id)}}" class="btn btn-danger">Delete</a>
        <a href="{{route('leavetype.view',$data->id)}}" class="btn btn-primary">View</a>
      </td>

    </tr>
    @endforeach

  </tbody>
</table>



@endsection
