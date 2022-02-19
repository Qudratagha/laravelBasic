
@extends('layout')

@section('mainContent')
    <br>
    <a href="{{route('rolls.create')}}" class="btn btn-primary " style="margin-bottom: 20px">Create Roll</a>
    <br>
    <table id="mytable" class="table table-bordered" style="text-align: center">
        <thead>
        <tr>
            <th>ID</th>
            <th>Roll Name</th>
            <th>Roll Desc</th>
            <th>Edit</th>
            <th>Del</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rolls as $roll)
            <tr>
                <td>{{$roll->id}}</td>
                <td>{{$roll->rollName}}</td>
                <td>{{$roll->rollDesc}}</td>
                <td><a href="{{route('rolls.edit',$roll->id)}}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="{{route('rolls.destroy', $roll->id)}}" method="POST">
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

@section('script')
    <script>
        @parent
        $(document).ready(function() {
            $('#mytable').DataTable( {
            });
        });
    </script>
@endsection
