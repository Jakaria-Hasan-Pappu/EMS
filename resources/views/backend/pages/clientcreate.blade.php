@extends('backend.welcome')

@section('contents')


<h1>Add Client</h1>
<form action="{{route('clientstore')}}" method="post">
  @csrf
  
  
  <div class="form-group">
    <label for="id">id</label>
    <input type="text" class="form-control" id="id"name="id" aria-describedby="emailHelp" placeholder="Enter id">
   
  </div>

  <div class="form-group">
    <label for="name">name/label>
    <input type="text" class="form-control" id="name"name="name"  placeholder="Enter name">
   
  

  <div class="form-group">
    <label for="phone">phone</label>
    <input type="text" class="form-control" id="status"name="phone" placeholder="active">
  </div>

  <div class="form-group">
    <label for="address">address</label>
    <input type="text" class="form-control" id="status"name="address" placeholder="active">
  </div>

  <div class="form-group">
                <label for="company">Select Company</label>
                <input type="text" class="form-control" id="status"name="company" placeholder="active">
  </div>


  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection