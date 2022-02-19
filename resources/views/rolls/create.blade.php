
@extends('layout')

@section('mainContent')



    <form class="form-horizontal" method="post" action="{{route('rolls.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Roll name</label>
            <input type="text" name="rollName" value="{{old('name')}}" class="form-control" placeholder="Roll Name" >
            <span style="color: red">
                        @if ($errors->has('name'))
                    {{ $errors->first('name') }}
                @endif
                    </span>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Roll Desc</label>
            <input type="text" value="{{old('email')}}" name="rollDesc" class="form-control" placeholder="Roll Desc" >
            <span style="color: red">
                @if ($errors->has('desc'))
                    {{ $errors->first('desc') }}
                @endif
                    </span>
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

@endsection

