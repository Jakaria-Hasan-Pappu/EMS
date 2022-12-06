@extends('backend.welcome')

@section('contents')


<h1>Update Leave</h1>
<form action="{{route('leave.update',$leave->id)}}" method="post">
    @method('put')
  @csrf




  <div class="form-group">
    <label for="leavereason">LeaveReason</label>
    <input value="{{ $leave->date }}" type="text" class="form-control" id="leavereason"name="leavereason"  placeholder="Enter name">



  <div class="form-group">
    <label for="fromdate">fromdate</label>
    <input value="{{ $leave->fromdate }}" type="date" class="form-control" id="fromdate"name="fromdate" placeholder="active">
  </div>

  <div class="form-group">
    <label for="todate">todate</label>
    <input value="{{ $leave->todate }}" type="date" class="form-control" id="todate"name="todate" placeholder="active">
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
