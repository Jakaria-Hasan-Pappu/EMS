@extends('backend.welcome')

@section('contents')


<h1>Update Salary</h1>
<form action="{{route('salary.update',$salary->id)}}" method="post" >
    @method('put')
  @csrf




  <div class="form-group">
    <label for="amount">amount</label>
    <input value="{{ $salary->amount }}" type="number" class="form-control" id="amount"name="amount"  placeholder="Enter name">



  <div class="form-group">
    <label for="month">month</label>
    <input value="{{ $salary->month }}" type="text" class="form-control" id="month"name="month" placeholder="active">
  </div>

  <div class="form-group">
    <label for="status">status</label>
    <input value="{{ $salary->status }}" type="date" class="form-control" id="status"name="status" placeholder="active">
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
