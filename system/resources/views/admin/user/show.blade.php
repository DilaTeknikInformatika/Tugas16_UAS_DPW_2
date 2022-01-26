@extends('admin.template.app')
@section('title', 'Detail User')

@section('content')

<div class="container">
        <div class="row ">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Detail User
                    </div>
                    <div class="card-body">
                        <h3>{{$user->nama}}</h3>
                            <hr>
                            <p>
                            {{"@".$user->username}} |
                            Email : {{$user->email}} 
                            </p>
                            <p>
                            No Handphone : {{$user->detail->no_handphone}} 
                            </p>
                            <hr>
                    </div>
                </div>           
            </div>
        </div>
    </div>

@endsection