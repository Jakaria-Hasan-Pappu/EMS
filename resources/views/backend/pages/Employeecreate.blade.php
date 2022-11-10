@extends('backend.welcome')

@section('contents')


<h1>Add Employee</h1>

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
<form action="{{route('emc.create')}}" method="post" enctype="multipart/form-data">

@if($errors->any())
            @foreach($errors->all() as $message)
                <p class="alert alert-danger">{{$message}}</p>
            @endforeach
        @endif

            @if(session()->has('message'))
                <p class="alert alert-success">{{session()->get('message')}}</p>
            @endif
  @csrf
  
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1"name="name"  placeholder="Enter name" required>
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"name="email" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"name="password" placeholder="Password">
  </div>

  
            
  <div class="form-group">
            <label for="image">Upload Image</label>
            <input name="image" type="file" class="form-control" id="image">
        </div>

  <div class="form-group">
                <label for="">Select Department</label>
                <select name="department_id" id="" class="form-control">
                    @foreach($departments  as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection