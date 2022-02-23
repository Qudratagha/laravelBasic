@extends('layouts.app')

@section('mainContent')
    <a href="{{route('product.create')}}" class="btn btn-primary " style="margin-bottom: 20px">Create Product</a>
    <table id="mytable" class="table table-bordered" style="text-align: center">
        <thead>
        <tr>
            <th>Product-ID</th>
            <th>Product-Name</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product as $product)
            <tr>
                <td>{{$product->productID}}</td>
                <td>{{$product->product}}</td>

                <td><a href="{{route('product.show',$product->productID)}}" class="btn btn-success">View</a></td>

                <td><a href="{{route('product.edit',$product->productID)}}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="{{route('product.destroy', $product->productID)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" >Dlt</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
	

@endsection
@section('datatablescript')
    <script>
        @parent
        $(document).ready(function() {
            $('#mytable').DataTable( {
            });
        });
    </script>
@endsection
