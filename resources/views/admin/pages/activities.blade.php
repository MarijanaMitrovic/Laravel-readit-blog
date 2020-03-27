



@extends('layouts.admin_layout')

@section('title')
    Admin panel - user's activities
@endsection

@section('content')
    <div class="content-wrapper">


    <div class="container">



        <section class="content">
            <div class="container-fluid">
    <br/><br/>

                <div class = "container">
                    <p class="card-title"> Select date: </p>
            <input class="form-control" id="datepicker" type ="date" />
        </div>

      <br/>
                <br/>


                <div class="card" id="table">
                    <div class="card-header">
                        <h3 class="card-title">All activities</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body" id="tablecontent">
                        <table class="table table-bordered">
                            <thead>
                            <tr>


                                <th>Activity</th>
                                <th>User</th>
                                <th>Time</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($activities as $a)
                                <tr>

                                    <td>{{$a->activity_content}}</td>
                                    <td>
                                        {{$a->usermail}}
                                    </td>
                                    <td>{{$a->time}}</td>

                                </tr>
                            @endforeach



                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        {{$activities->links()}}
                    </div>
                </div>
                <!-- /.card -->







                <!-- /.row -->


            </div><!-- /.container-fluid -->
        </section>
    </div>
        </div>


@endsection










@section('scripts')
    <script type="text/javascript" src="{{asset('js/adminpanel-ajax.js')}}">

    </script>
    @endsection