@extends('backend.welcome')

@section('contents')


<h1>Add Project</h1>
<form action="{{route('projectsstore')}}" method="post">
  @csrf


  <div class="form-group">
    <label for="id">id</label>
    <input type="text" class="form-control" id="id"name="id" aria-describedby="emailHelp" placeholder="Enter id">

  </div>

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name"name="name"  placeholder="Enter name">

  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="quantity"name="description" placeholder="text">
  </div>
  <div class="form-group">
    <label for="deadline">deadline</label>
    <input type="text" class="form-control" id="status"name="deadline" placeholder="active">
  </div>
  <div class="form-group">
                <label for="">Select Employee</label>
                <select name="employee_id" id="" class="form-control">
                    @foreach($employees  as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Select Client</label>
                <select name="client_id" id="" class="form-control">
                    @foreach($clients  as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection






