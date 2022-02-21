@extends('layouts.app')
@section('mainContent')
    <form class="form-horizontal" method="post" action="{{route('category.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Category name</label>
            <input type="text" name="categoryName" class="form-control" placeholder="Category Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">User ID</label>
            <input type="number" name="createdByUserID" class="form-control" placeholder="U_Id">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Date_Created</label>
            <input type="date"  class="form-control" id="dateCreated" name="dateCreated" value="<?php echo ('Y-m-d')?>" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    <a href="{{ url()->previous() }}" class="btn btn-outline-danger">Back</a>
@endsection

