@extends('layouts.app')
@section('mainContent')
    <a href="{{route('users.create')}}" class="btn btn-primary " style="margin-bottom: 20px">Create User</a>
    <br>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <table id="mytable" class="table table-bordered" style="text-align: center">
        <thead>
        <tr>
            <th>User ID</th>
            <th>User-Name</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->user_id}}</td>
                <td>{{$user->name}}</td>
                <td><a href="{{route('users.show',$user->user_id)}}" class="btn btn-success">View</a></td>
                <td><a href="{{route('users.edit',$user->user_id)}}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="{{route('users.destroy', $user->user_id)}}" method="POST">
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
