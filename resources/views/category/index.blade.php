@extends('layouts.app')

@section('mainContent')
    <br>
    <a href="{{route('category.create')}}" class="btn btn-primary " style="margin-bottom: 20px">Create Category</a>
    <br>
    <table id="mytable" class="table table-bordered" style="text-align: center">
        <thead>
        <tr>
            <th>C_Id</th>
            <th>Category Name</th>
            <th>User_Id</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($category as $category)
            <tr>
                <td>{{$category->categoryID}}</td>
                <td>{{$category->categoryName}}</td>
                <td>{{$category->createdByUserID}}</td>
                <td><a href="{{route('category.edit',$category->categoryID)}}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="{{route('category.destroy', $category->categoryID)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" >Dlt</button>
                    </form>
                </td>
            {{--            </tr>--}}
        @endforeach
        </tbody>

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
