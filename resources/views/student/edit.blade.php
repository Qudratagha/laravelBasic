
@extends('layout')

@section('mainContent')

    <form class="form-horizontal" method="post" action="{{route('student.update',$student->id)}}">
        @csrf
        @method('PUT')
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" name="name" value="{{$student->name }}" class="form-control" placeholder="name">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" value="{{$student->email }}" class="form-control" placeholder="email">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">User Name</label>
            <input type="text" name="username" value="{{$student->username }}" class="form-control" placeholder="user name">
        </div>


        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to update it')">Submit</button>

    </form>



@endsection

