@extends('backend.welcome')

@section('contents')
    <h1>Add Leave</h1>
    <form action="{{ route('leve.store') }}" method="post">
        @csrf


        <div class="form-group">
            <label for="employee_id">select employee</label>
            <select class="form-control" name="employee_id" id="id">
                @foreach ($employee as $value)

                <option value="{{ $value->id }}">{{$value->name}} </option>

                @endforeach

            </select>

        </div>

        <div class="form-group">
            <label for="leavereason">Leave Reason</label>
            <input type="text" class="form-control" id="name"name="leavereason" placeholder="Enter reason">

            <div class="form-group">
                <label for="fromdate">From Date</label>
                <input type="date" class="form-control" id="quantity"name="fromdate" placeholder="date">
            </div>

            <div class="form-group">
                <label for="todate">To Date</label>
                <input type="date" class="form-control" id="designation"name="todate" placeholder="date">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
