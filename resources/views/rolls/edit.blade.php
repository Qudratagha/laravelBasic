
@extends('layout')

@section('mainContent')
    <br>
    <form class="form-horizontal" method="post" action="{{route('rolls.update',$roll->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Roll name</label>
            <input type="text" value="{{$roll->rollName}}" name="rollName" class="form-control" placeholder="user name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Roll name</label>
            <input type="text" value="{{$roll->rollDesc}}" name="rollDesc" class="form-control" placeholder="user name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection

