
@extends('layout')

@section('mainContent')
    <br>
    <form class="form-horizontal" method="post" action="{{route('users.update',$user->id)}}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input type="text" value="{{ old('name',$user->name) }}" name="name" class="form-control" placeholder="user name" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" value="{{old('email',$user->email) }}" class="form-control" placeholder="user email" >
        </div>

        <div class="form-group">
            <label for="UserRole">User Roles</label>
            <p class="text-muted">Please select the User Role </p>

            @foreach($rolls as $roll)
                <label class="checkbox-inline">
                    <input type="checkbox"  id="roll" name="roll[]" value="{{$roll->id}}"
                           @if(in_array($roll->id,$user->rolls->pluck('id')->toArray())) checked @endif  >
                    {{$roll->rollName}}
                </label>
                <br>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>



@endsection

