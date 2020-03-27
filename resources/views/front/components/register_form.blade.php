<br/>
<br/>
<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-8 mb-5">


                <form action="{{ route("register") }}" method="post" class="p-5 bg-white" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row form-group">
                        <h2 class="font-size-regular">Register here</h2>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <input type="text" id="name" name="name" class="form-control" placeholder="First Name">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <input type="text" id="surname" name="surname" class="form-control" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Register" id="btnRegister" name="btnRegister" class="btn btn-primary pill text-white px-5 py-2">
                        </div>
                        <br/>
                        <br/>

                    </div>


                </form>


            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get("success") }}
                </div>
            @endif

            @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get("error") }}
                </div>
            @endif


        </div>
    </div>
</div>


