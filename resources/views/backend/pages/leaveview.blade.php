@extends('backend.welcome')

@section('contents')
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">




                        </div>
                        <p class="about">{{ $leave->leavereason }}</p>
                        <p class="about">{{ $leave->fromdate }}</p>
                        <p class="about">{{ $leave->todate}}</p>
                        <p class="about">{{ $leave->employee->name }}</p>

                        <div class="top-design"></div>

                        <div class="card-body">


                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
