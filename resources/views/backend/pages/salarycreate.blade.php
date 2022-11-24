@extends('backend.welcome')

@section('contents')


<h1>Add Salary</h1>
<form action="/salaryform" method="post" >
  @csrf


  <div class="form-group">
    <label for="id">id</label>
    <input type="text" class="form-control" id="id"name="id" aria-describedby="emailHelp" placeholder="Enter id">

  </div>

  <div class="form-group">
    <label for="name">amount</label>
    <input type="number" class="form-control" id="name"name="amount"  placeholder="Enter name">

  <div class="form-group">
    <label for="quantity">Month</label>
    <input type="date" class="form-control" id="quantity"name="month" placeholder="text">
  </div>
  <div class="form-group">
    <label for="status">status</label>
    <input type="text" class="form-control" id="status"name="status" placeholder="active">
  </div>
  <div class="form-group">
    <label for="">Select Employee</label>
    <select name="employee_id" id="" class="form-control">
        @foreach ($employee as $data)
            <option value="{{ $data->id }}">{{ $data->name }}</option>
        @endforeach
    </select>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

