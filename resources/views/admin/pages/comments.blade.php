@extends('layouts.admin_layout')


@section('title')
    Admin panel - All comments
    @endsection
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">


                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All comments</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>

                                <th>Id</th>
                                <th>Content</th>
                                <th>User's email</th>
                                <th>Post title</th>
                                <th>Updated at</th>
                                <th>Delete</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $c)
                                <tr>
                                    <td>{{$c->id}}</td>
                                    <td>{{$c->content}}</td>
                                    <td>
                                        {{$c->email}}
                                    </td>
                                    <td>{{$c->title}}</td>
                                    <td>{{$c->updated_at}}</td>

                                    <td><a href="{{route("delete-comment",['id'=>$c->id])}}" class=" bg-danger" >Delete </a></td>


                                </tr>
                            @endforeach



                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        {{$comments->links()}}
                    </div>
                </div>
                <!-- /.card -->







                <!-- /.row -->


            </div><!-- /.container-fluid -->
        </section>
    </div>

@endsection