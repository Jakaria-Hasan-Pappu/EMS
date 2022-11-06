@extends('backend.welcome')

@section('contents')


<h1>Add Designation</h1>
<form action="{{route('dsg.form')}}" target="_blank" method="post">
  @csrf
  
  <div class="form-group">
    <label for="Department Name"> Department Name</label>
    <input type="text" class="form-control" id="Department Name"name="department_name"  placeholder="Enter name">
   
  </div>
  <div class="form-group">
    <label for="Designation">Designation</label>
    <input type="text" class="form-control" id="Designation"name="designation" aria-describedby="emailHelp" placeholder="Enter designation">
   
  </div>
  <div class="form-group">
    <label for="exampleInputstatus">Status</label>
    <input type="text" class="form-control" idexampleInputstatus name="status" placeholder="Status">
   
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection