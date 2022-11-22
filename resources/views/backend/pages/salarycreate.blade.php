@extends('backend.welcome')

@section('contents')


<h1>Add Salary</h1>
<form action="/salaryform" method="post">
  @csrf
  
  
  <div class="form-group">
    <label for="id">id</label>
    <input type="text" class="form-control" id="id"name="id" aria-describedby="emailHelp" placeholder="Enter id">
   
  </div>

  <div class="form-group">
    <label for="name">amount</label>
    <input type="text" class="form-control" id="name"name="name"  placeholder="Enter name">
   
  <div class="form-group">
    <label for="quantity">Month</label>
    <input type="text" class="form-control" id="quantity"name="quantity" placeholder="text">
  </div>
  <div class="form-group">
    <label for="status">status</label>
    <input type="text" class="form-control" id="status"name="status" placeholder="active">
  </div>
  <div class="form-group">
    <label for="employee">employee</label>
    <input type="text" class="form-control" id="designation"name="employee" placeholder="designation">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
  
            