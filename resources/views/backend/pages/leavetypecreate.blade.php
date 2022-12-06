@extends('backend.welcome')

@section('contents')
    <h1>Add Leavetype</h1>
    <form action="{{ route('leavetype.store') }}" method="post">
        @csrf



            </select>


        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name"name="name" placeholder="text">


            <div class="form-group">
                <label for="balance">Balance</label>
                <input type="text" class="form-control" id="balance"name="balance" placeholder="number">
            </div>






            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
