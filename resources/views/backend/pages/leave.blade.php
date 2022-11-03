@extends('backend.welcome')

@section('contents')


<h1>Add Leave</h1>
<form action="/leve" target="_blank" method="post">
  @csrf
  
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1"name="name"  placeholder="Enter name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">id</label>
    <input type="email" class="form-control" id="exampleInputEmail1"name="id" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Quantity</label>
    <input type="password" class="form-control" id="exampleInputPassword1"name="Quantity" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">status</label>
    <input type="password" class="form-control" id="exampleInputPassword1"name="status" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">designation</label>
    <input type="password" class="form-control" id="exampleInputPassword1"name="designation" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection