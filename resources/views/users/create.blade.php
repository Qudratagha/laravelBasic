
@extends('layout')

@section('mainContent')

    <br>

    <form class="form-horizontal" method="post" action="{{route('users.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">User name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="User Name" >
            <span style="color: red">
                        @if ($errors->has('name'))
                    {{ $errors->first('name') }}
                @endif
                    </span>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">User Email</label>
            <input type="text" value="{{old('email')}}" name="email" class="form-control" placeholder="user email" >
            <span style="color: red">
                @if ($errors->has('email'))
                    {{ $errors->first('email') }}
                @endif
                    </span>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">User Password</label>
            <input type="text" name="password" class="form-control" placeholder="password" >
            <span style="color: red">
                        @if ($errors->has('password'))
                    {{ $errors->first('password') }}
                @endif
            </span>
        </div>

{{--        <div class="form-group">--}}

{{--            <label for="division">Level</label> <br>--}}
{{--            <p class="text-muted">Please select the yuor rolls.</p> <br>--}}

{{--            @foreach($rolls as $roll)--}}
{{--                <label class="checkbox-inline">--}}
{{--                    <input type="checkbox" id="" name="" value="{{$roll->id}}"> {{$roll->rollName}}--}}
{{--                </label>--}}
{{--                <br>--}}
{{--            @endforeach--}}
{{--        </div>--}}

        <div class="form-group">
            <label for="UserRole">User Roles</label>
            <p class="text-muted">Please select the User Role </p>
            @foreach($rolls as $roll)
                <label class="checkbox-inline">
                    {{$roll->rollName}}
                    <input type="checkbox"  id="roll" name="roll[]" value="{{$roll->id}}"  >
                </label>
                <br>
            @endforeach
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{ url()->previous() }}" class="btn btn-outline-danger">Back</a>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection

