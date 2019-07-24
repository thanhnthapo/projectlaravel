@extends('layouts.backend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card bg-info">
                <h1 class="text-center">User Profile</h1>
                    <div class="col-12">
                        <h2><span class="fa fa-user font-weight-bold "></span> {{ $user->name }}</h2>
                    </div>
                    <div class="col-12">
                        <h3><span class="fa fa-calendar font-weight-bold "></span> {{ $user->dob }}</h3>
                    </div>
                    <div class="col-12">
                        <h3><span class="fa fa-location-arrow font-weight-bold "></span> {{ $user->address }}</h3>
                    </div>
                    <div class="col-12">
                        <h3><span class="fa fa-phone font-weight-bold "></span> {{ $user->phone }}</h3>
                    </div>
                    <div class="col-12">
                        <h3><span class="fa fa-info font-weight-bold "></span> {{ $user->email }}</h3>
                    </div>
                    <div class="text-center">

                            <button class="btn btn-warning"><a href="{{ route('user.edit',['id'=>$user->id]) }}"><i class="fa fa-edit"></i> Edit Profile</a></button>

                    </div>
            </div>
        </div>
    </div>

@endsection
<style>
    .card {
        border-radius: 40px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 650px;
        padding: 20px 100px;
        margin: 80px auto;
    }

    .card h1 {
        color: #5d561b;
    }


    .card .detail a {
        font-size: 22px;
        color: black;
    }

    button:hover, a:hover {
        opacity: 0.7;
    }
</style>