@extends('backend.welcome')

@section('contents')


<h1>Update Attendance</h1>
<form action="{{ route('attendance.update', $attendance->id) }}" method="post">
    @method('put')
  @csrf




  <div class="form-group">
    <label for="date">Date</label>
    <input value="{{ $attendance->date }}" type="date" class="form-control" id="name"name="date"  placeholder="Enter name">



  <div class="form-group">
    <label for="intime">intime</label>
    <input value="{{ $attendance->intime }}" type="time" class="form-control" id="status"name="intime" placeholder="active">
  </div>

  <div class="form-group">
    <label for="outtime">outtime</label>
    <input value="{{ $attendance->outtime }}" type="time" class="form-control" id="status"name="outtime" placeholder="active">
  </div>

  <div class="form-group">
                <label for="">Select Employee</label>
                <select name="employee_id" id="" class="form-control">
                    @foreach($employees  as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>



  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
