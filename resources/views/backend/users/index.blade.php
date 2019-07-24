@extends('layouts.backend')

@section('content')
    <div class="col-lg-12">
        <h3>Danh Sách Người Dùng</h3>
        <div class="table-responsive">
            <button class="btn btn-success" style="margin: 10px 0px"><a href="{{ route('user.create') }}"><i
                            class="fa fa-plus"></i> Thêm mới</a></button>
            <table class="table table-bordered table-hover tablesorter">
                <thead>
                <tr>
                    <th>Name <i class="fa fa-sort"></i></th>
                    <th>Birthday <i class="fa fa-sort"></i></th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->dob }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                        <td>
                            <button class="btn btn-danger"><a href=""><i class="fa fa-edit"></i></a></button>
                            <button class="btn btn-warning"><a class="product-user" product-id="" onclick="return confirm('Xác nhận xóa?')" href="#"><i class="fa fa-trash"></i></a></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </thead>
            </table>
        </div>
    </div>
@endsection
