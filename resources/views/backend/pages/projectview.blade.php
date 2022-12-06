@extends('backend.welcome')

@section('contents')
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">




                        </div>
                        <p class="about">{{ $project->name }}</p>
                        <p class="about">{{ $project->description }}</p>
                        <p class="about">{{ $project->deadline}}</p>

                        <p class="about">{{ $project->employee->name }}</p>
                        <p class="about">{{ $project->client->name }}</p>

                        <div class="top-design"></div>
                        <div class="card-body">
                            <img width="200px" src="{{url('/uploads/'.$project->image)}}" alt="Image" class="avatar">

                        </div>

                        <div class="card-body">


                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
