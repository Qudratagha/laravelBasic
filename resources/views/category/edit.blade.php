@extends('layouts.app')
@section('mainContent')
    <form class="form-horizontal" method="post" action="{{route('category.update',$category->categoryID)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Category name</label>
            <input type="text" value="{{$category->categoryName}}" name="categoryName" class="form-control" placeholder="user name">
        </div>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to update it')">Submit</button>
    </form>
    <br>
    <a href="{{ url()->previous() }}" class="btn btn-outline-danger">Back</a>
@endsection

