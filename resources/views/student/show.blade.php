
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
                                <dt>Student ID: </dt>
                                <dd>{{$student->id}}</dd>
                                <dt>Student Name: </dt>
                                <dd>{{$student->name}}</dd>
                                <dt>Email: </dt>
                                <dd>{{$student->emial}}</dd>

                                <dt>username: </dt>
                                <dd>{{$student->username}}</dd>

                                <dt>Phone: </dt>
                                <dd>{{$student->phone}}</dd>

                                <dt>DOB: </dt>
                                <dd>{{$student->dob}}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <a href="{{ url()->previous() }}" class="btn btn-outline-danger">Back</a>




@endsection

