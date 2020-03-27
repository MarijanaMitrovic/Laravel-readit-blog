@extends('layouts.admin_layout')
@section('title')
    Admin panel - all posts
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
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Updated at</th>
                                    <th>Photo</th>
                                    <th>Delete</th>
                                    <th>Update</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $p)
                                <tr>
                                    <td>{{$p->id}}</td>
                                    <td>{{$p->title}}</td>
                                    <td>
                                        {!!substr(strip_tags($p->text), 0, 50)!!} ...
                                    </td>
                                    <td>{{$p->updated_at}}</td>
                                    <td><img width="40px" height="40px" src="{{asset("/images/".$p->path_new)}}"/></td>
                                    <td><a href="{{route("delete-post",['id'=>$p->id])}}" class=" bg-danger" >Delete </a></td>
                                    <td><a href="{{ route("post-show", ['id' => $p->id]) }}" class="bg-warning">Update</a></td>

                                </tr>
                                @endforeach



                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                           {{$posts->links()}}
                        </div>
                    </div>
                    <!-- /.card -->







            <!-- /.row -->


        </div><!-- /.container-fluid -->
    </section>
    </div>
    @endsection