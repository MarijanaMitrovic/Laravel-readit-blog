<body>
    
	  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="l">Read<i>it</i>.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">

				@foreach($navigation as $n)
					<li><a class="nav-link" href="{{ url($n->route) }}">{{ $n->title }}</a></li>
				@endforeach
					@if(session()->has('user'))
					@if(session()->get('user')->role_name == 'admin')
							<li><a class="nav-link" href="{{ route("admin-posts") }}">Admin panel</a></li>
				@endif
						@if(session()->get('user')->role_name == 'user')
					<li><a class="nav-link" href="{{ route("contact") }}">Contact</a></li>
						@endif
					<li><a class="nav-link" href="{{ route("logout") }}">Logout</a></li>

				@else
					<li><a class="nav-link" href="{{ route("loginForm") }}">Login</a></li>
					<li><a class="nav-link" href="{{ route("registerForm") }}">Register</a></li>
			@endif

				<!--	<li class="nav-item active"><a href=" " class="nav-link"></a></li> -->


	        </ul>
	      </div>
	    </div>
	  </nav>

	  <div class="hero-wrap "  data-stellar-background-ratio="0.5">
		  <div class="overlay"></div>
		  <div class="container">
			  <div class="row no-gutters slider-text  align-items-center justify-content-start" data-scrollax-parent="true">
				  <div class="col-md-12 ftco-animate">

					  <br/>
					  <br/>
					  <!--	<h3 class="mb-4 mb-md-0">Readit blog</h3> -->
					  <div class="row">
						  <div class="col-md-7">
							  <div class="text">
								  <br/>
								  <br/>
								  @yield('nav-text')
								  <div class='mouse'>
									  <a href='#' class='mouse-icon'>
										  <div class='mouse-wheel'><span class='ion-ios-arrow-round-down'></span></div>
									  </a>
								  </div>
							  </div>
						  </div>


					  </div>
				  </div>
			  </div>
		  </div>
	  </div>
	  </div>