
@extends('layout')

@section('mainContent')
    <br>
    <a href="{{route('category.create')}}" class="btn btn-primary " style="margin-bottom: 20px">Create Category</a>
    <br>
    <table class="table table-bordered table-dark" style="text-align: center">
        <thead>
        <tr>
            <th>C_Id</th>
            <th>Category Name</th>
            <th>User_Id</th>
        </tr>
        </thead>
        <tbody>
        @foreach($category as $category)
            <tr>
                <td>{{$category->categoryID}}</td>
                <td>{{$category->categoryName}}</td>
                <td>{{$category->createdByUserID}}</td>
                <td><a href="{{route('category.edit',$category->categoryID)}}" class="btn btn-success">Edit</a></td>
{{--                <td><a href="{{route('cars.edit',$user->id)}}" class="btn btn-success">Edit</a></td>--}}
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
    </table>
@endsection
