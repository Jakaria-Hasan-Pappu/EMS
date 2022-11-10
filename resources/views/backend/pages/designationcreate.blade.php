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
            <label for="">Select Status</label>
            <select name="status" id="" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
   
  </div>
  <div class="form-group">
                <label for="">Select Department</label>
                <select name="department_id" id="" class="form-control">
                    @foreach($departments  as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection