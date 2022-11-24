@extends('backend.welcome')

@section('contents')
    <h1>Add Leave</h1>
    <form action="{{ route('leve.store') }}" method="post">
        @csrf



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
