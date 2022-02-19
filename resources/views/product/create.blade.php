
@extends('layout')

@section('mainContent')

    <form class="form-horizontal" method="post" action="{{route('product.store')}}">
        @csrf

        <div class="form-group">
            <label for="exampleInputPassword1">Product Name</label>
            <input type="text" name="product" class="form-control" placeholder="product name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">User_ID</label>
            <input type="number" name="createdByUserID" class="form-control" placeholder="U_ID">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Date_Created</label>
            <input type="date"  class="form-control" id="dateCreated" name="dateCreated" value="<?php echo ('Y-m-d')?>" />
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection

