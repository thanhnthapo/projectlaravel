@extends('layouts.backend')

@section('content')
    <div class="content-header text-center">
        <h2>Create User</h2>
    </div>
    <div class="container">
        <div class="row box-body">
            <form class="form-horizontal" method="POST" action="{{ route('user.store')}}"
                  enctype="multipart/form-data">
                @csrf
                <div class="form-group col-sm-8">
                    <label>Name</label>
                    <input class="form-control" name="name" value="{{ old('name') }}">
                    <p style="color: red">{{ $errors->first('name')}}</p>
                </div>
                <div class="form-group col-sm-8">
                    <label>Email</label>
                    <input class="form-control" name="email" value="{{ old('email') }}">
                    <p style="color: red">{{ $errors->first('email')}}</p>
                </div>
                <div class="form-group col-sm-8">
                    <label>Phone</label>
                    <input class="form-control" placeholder="" name="phone" value="{{ old('phone')  }}">
                    <p style="color: red">{{ $errors->first('phone')}}</p>
                </div>
                <div class="form-group col-sm-8">
                    <label>Address</label>
                    <input class="form-control" placeholder="" name="address" value="{{ old('address') }}">
                    <p style="color: red">{{ $errors->first('address')}}</p>
                </div>
                <div class="form-group col-sm-8">
                    <label>Birthday</label>
                    <input  type="date" class="form-control" name="dob" value="{{ old('dob')  }}">
                    <p style="color: red">{{ $errors->first('dob')}}</p>
                </div>
                <div class="form-group col-sm-8">
                    <label>Password</label>
                    <input class="form-control" name="password" value="{{ old('password')  }}">
                    <p style="color: red">{{ $errors->first('password')}}</p>
                </div>
                <div class="form-group col-sm-8">
                    <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Thêm Mới</button>
                </div>
            </form>
        </div>
    </div>

@endsection

