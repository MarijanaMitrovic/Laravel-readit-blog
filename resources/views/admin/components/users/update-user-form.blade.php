
@extends('layouts.admin_layout')
@section('title')
    Admin - edit user
@endsection

@section('content')

    <div class="content-wrapper">

        <br/>
        <br/>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit user form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route("user-update", ['id' => $user->id]) }}" method="post" enctype="multipart/form-data" role="form">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="title" name="name" value="{{$user->name}}" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" class="form-control" id="title" name="surname" value="{{$user->surname}}" placeholder="Enter last name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Role id (1- admin, 2- user)</label>
                                <input type="text" class="form-control" id="role_id" name="role_id" value="{{$user->role_id}}" placeholder="Enter role">
                            </div>



                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="editUser" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.container-fluid -->
        </section>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-warning">
                {{ session('error') }}
            </div>
        @endif
        @if(session('warning'))
            <div class="alert alert-warning">
                {{ session('warning') }}
            </div>
    @endif
    <!-- /.content -->
    </div>



@endsection


