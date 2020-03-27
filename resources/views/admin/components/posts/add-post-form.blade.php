
@extends('layouts.admin_layout')
@section('title')
    Admin - add post
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
                        <form action="{{ route("post-store") }}" method="post" enctype="multipart/form-data" role="form">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1">Post content</label>
                <textarea class="textarea" name="text" placeholder="Type post text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category id (1- web, 2-marketing, 3-illustration)</label>
                                    <input type="text" class="form-control" id="cat" name="category_id" placeholder="Enter category">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="photo" name="photo">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="insertPost" class="btn btn-primary">Submit</button>
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
@section('scripts')
    <script>

        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
    @endsection