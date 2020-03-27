<br/>
<br/>
<div class="site-section site-section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <form action="{{ route("login") }}" method="post" class="p-5 bg-white">
                    {{ csrf_field() }}
                    <div class="row form-group">
                        <h2 class="font-size-regular">Login and access your account</h2>
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
                            <input type="submit" value="Login" id="btnLogin" name="btnLogin" class="btn btn-primary pill text-white px-5 py-2">
                        </div>
                        <br/>
                        <br/>
                        <div class="col-md-12">
                            You don't have account? Register here
                            <br/>
                            <a class="btn btn-primary pill text-white px-5 py-2" href="{{ route("registerForm") }}" name="btnRegister">
                                Register
                            </a>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
