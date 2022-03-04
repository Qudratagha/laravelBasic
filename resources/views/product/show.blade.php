@extends('layouts.app')
@section('mainContent')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: whitesmoke">View User</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <dl>
                                <dt>Product ID: </dt>
                                <dd>{{$product->productID}}</dd>
                                <dt>Product-Category ID: </dt>
                                <dd>{{$product->categoryID}}</dd>
                                <dt>Product Name: </dt>
                                <dd>{{$product->product}}</dd>
                                <dt>Product Created Date: </dt>
                                <dd>{{$product->dateCreated}}</dd>
                                <dt>Product-User ID: </dt>
                                <dd>{{$product->user_id}}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	    <br>
    <a href="{{ url()->previous() }}" class="btn btn-outline-danger">Back</a>

@endsection

