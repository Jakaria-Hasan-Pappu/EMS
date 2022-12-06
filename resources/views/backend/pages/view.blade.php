@extends('backend.welcome')

@section('contents')
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">

                            <h5>Employee ID ={{ $employee->id }}</h5>
                            <h6 class="text-uppercase">{{ $employee->name }}</h6>

                        </div>
                        <p class="about">{{ $employee->email }}</p>
                        <p class="about">{{ $employee->attendance }}</p>


                        <div class="top-design"></div>

                        <div class="card-body">
                            <img width="200px" src="{{url('/uploads/'.$employee->image)}}" alt="Image" class="avatar">

                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <table class="table">
        <thead>
          <tr>
              <th scope="col">id</th>
            <th scope="col">Leavereason</th>
            <th scope="col">Fromdate</th>
            <th scope="col">Todate</th>
            <th scope="col">employee_id</th>
            <th scope="col">leavetype_id</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>


          @foreach($leave as $data )

          <tr>

          <td>{{$data->id}}</td>
            <td>{{$data->leavereason}}</td>
            <td>{{$data->fromdate}}</td>
            <td>{{$data->todate}}</td>
            <td>{{$data->employee->name}}</td>
            <td>{{$data->leavetype->id}}</td>




            <td>
              <a href="{{route('leave.edit',$data->id)}}" class="btn btn-warning">Edit</a>
              <a href="{{route('leave.delete',$data->id)}}" class="btn btn-danger">Delete</a>
              <a href="{{route('leave.view',$data->id)}}" class="btn btn-primary">View</a>
            </td>

          </tr>
          @endforeach

        </tbody>
      </table>





@endsection
