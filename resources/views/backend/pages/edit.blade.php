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
    <form action="{{ route('employee.update', $employee->id) }}" method="post" enctype="multipart/form-data">
        @method('put')

        @if (session()->has('message'))
            <p class="alert alert-success">{{ session()->get('message') }}</p>
        @endif
        @csrf

        <div class="form-group">
            <label for="id">ID</label>
            <input value="{{ $employee->id }}" required name="id" type="text" class="form-control" id="id"
                placeholder="Enter Product Name">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input value="{{ $employee->name}}" required name="name" type="text" class="form-control"
                id="name" placeholder="Enter Product Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input value="{{ $employee->email }}" required name="email" type="text" class="form-control"
                id="name" placeholder="Enter Product Name">
        </div>






        <div class="form-group">
            <label for="image">Upload Image</label>
            <input value="{{ $employee->image }}" required name="image" type="file" class="form-control"
                id="name" placeholder="Enter Product Name">
        </div>




        <div class="form-group">
            <label for="">Select Department</label>
            <select name="department_id" id="" class="form-control">
                @foreach ($departments as $data)
                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary">update</button>
    </form>


@endsection
