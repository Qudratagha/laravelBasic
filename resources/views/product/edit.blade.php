
@extends('layout')

@section('mainContent')
    <br>
    <form class="form-horizontal" method="post" action="{{route('product.update',$product->productID)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Category name</label>
            <input type="text" value="{{$product->product}}" name="product" class="form-control" placeholder="user name">
        </div>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to update it')">Submit</button>
    </form>



@endsection

