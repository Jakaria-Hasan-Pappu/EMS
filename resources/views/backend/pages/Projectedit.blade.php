@extends('backend.welcome')

@section('contents')


<h1>Update Project</h1>
<form action="{{route('projects.update',$project->id)}}" method="post" enctype="multipart/form-data">
    @method('put')
  @csrf




  <div class="form-group">
    <label for="name">Name</label>
    <input value="{{ $project->name }}" type="text" class="form-control" id="name"name="name"  placeholder="Enter name">



  <div class="form-group">
    <label for="description">description</label>
    <input value="{{ $project->description }}" type="text" class="form-control" id="description"name="description" placeholder="active">
  </div>

  <div class="form-group">
    <label for="deadline">deadline</label>
    <input value="{{ $project->deadline }}" type="date" class="form-control" id="deadline"name="deadline" placeholder="active">
  </div>

  <div class="form-group">
    <label for="image">Upload Image</label>
    <input value="{{ $project->image }}" required name="image" type="file" class="form-control"
        id="image" placeholder="Enter Product Name">
</div>

  <div class="form-group">
                <label for="">Select Employee</label>
                <select name="employee_id" id="" class="form-control">
                    @foreach($employees  as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Select CLient</label>
                <select name="client_id" id="" class="form-control">
                    @foreach($clients  as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>


  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
