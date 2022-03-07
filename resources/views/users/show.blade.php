
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
                                <dt>User ID: </dt>
                                <dd>{{$user->user_id}}</dd>
                                <dt>User Name: </dt>
                                <dd>{{$user->name}}</dd>
                                <dt>User Email: </dt>
                                <dd>{{$user->email}}</dd>
                                <dt>User Roll: </dt>

                                @foreach($user->rolls as $roll)
                                <dd>{{$roll->rollName}}</dd>
                                @endforeach
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
@endsection

