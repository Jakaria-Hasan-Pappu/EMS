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
@endsection
