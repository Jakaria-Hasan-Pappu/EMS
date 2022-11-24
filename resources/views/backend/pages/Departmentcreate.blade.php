@extends('backend.welcome')

@section('contents')

<h1>Add Department</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  </div>
<form action="{{route('department.form')}}"  method="post"  enctype="multipart/form-data">

       @if(session()->has('message'))
            <p class="alert alert-success">{{session()->get('message')}}</p>
        @endif
  @csrf

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text"  class="form-control" id="name"name="name"  placeholder="Enter name">

  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email"  class="form-control" id="email"name="email" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="room">RoomNo</label>
    <input type="room"  class="form-control" id="room"name="room" placeholder="roomno">
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
