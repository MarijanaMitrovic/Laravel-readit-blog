@extends('layouts.admin_layout')

@section('title')
    Admin panel - all users
    @endsection

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">


                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All posts</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>

                                <th>Id</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Email</th>
                                <th>Updated at</th>
                                <th>Role</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $u)
                                <tr>
                                    <td>{{$u->id}}</td>
                                    <td>{{$u->name}}</td>
                                    <td>
                                       {{$u->surname}}
                                    </td>
                                    <td>{{$u->email}}</td>
                                    <td>{{$u->updated_at}}</td>
                                    <td>{{$u->role_name}}</td>
                                    <td><a href="{{route("delete-user",['id'=>$u->id])}}" class=" bg-danger" >Delete </a></td>
                                    <td><a href="{{ route("user-show", ['id' => $u->id]) }}" class="bg-warning">Update</a></td>

                                </tr>
                            @endforeach



                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        {{$users->links()}}
                    </div>
                </div>
                <!-- /.card -->







                <!-- /.row -->


            </div><!-- /.container-fluid -->
        </section>
    </div>

@endsection