@extends('backend.welcome')

@section('contents')

<h1>Add Department</h1>
<form action="{{route('department.form')}}" target="_blank" method="post">
  @csrf
  
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1"name="name"  placeholder="Enter name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"name="email" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputRoom">RoomNo</label>
    <input type="room" class="form-control" id="exampleInputRoom"name="room" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection