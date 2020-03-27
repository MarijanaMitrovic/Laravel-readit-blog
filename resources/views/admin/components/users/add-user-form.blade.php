
@extends('layouts.admin_layout')
@section('title')
    Admin - add user
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
                        <h3 class="card-title">Add new post form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route("user-store") }}" method="post" enctype="multipart/form-data" role="form">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="title" name="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" class="form-control" id="title" name="surname" placeholder="Enter last name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Role id (1- admin, 2- user)</label>
                                <input type="text" class="form-control" id="role_id" name="role_id" placeholder="Enter role">
                            </div>



                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="insertUser" class="btn btn-primary">Submit</button>
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


