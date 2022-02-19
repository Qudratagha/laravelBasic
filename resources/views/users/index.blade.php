    <br>
    <a href="{{route('users.create')}}" class="btn btn-primary " style="margin-bottom: 20px">Create Userssss</a>
    <br>
    <table id="mytable" class="table table-bordered" style="text-align: center">
        <thead>
        <tr>
            <th>U-ID</th>
            <th>U-Name</th>
            <th>View</th>
            <th>Edit</th>
            <th>Del</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td><a href="{{route('users.show',$user->id)}}" class="btn btn-success">View</a></td>
                <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="{{route('users.destroy', $user->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" >Dlt</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@section('datatablescript')
<script>
    @parent
    $(document).ready(function() {
        $('#mytable').DataTable( {
        });
    });
</script>
@endsection
