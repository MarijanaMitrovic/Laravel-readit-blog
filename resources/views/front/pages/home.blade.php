
@extends('layouts.template')

@section('title')
	ReadIt blog - Welcome to our blog!
	@endsection
@section('nav-text')
	<p>We are here to help you to get easier into digital world. If you are insterested in digital marketing, webdesign or illustrations - keep scrolling!</p>
@endsection

@section('content')




<section class="ftco-section">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-12">



				   @foreach($posts as $p)
   					<div class="case">
   						<div class="row">
   							<div class="col-md-6 col-lg-6 col-xl-8 d-flex">
   						<img src="{{asset('/images/'.$p->path_new) }}"  alt="Article image" href="{{ route("singlePost", ['id' => $p->id]) }}" class="img w-100 mb-3 mb-md-0" />
   							</div>
   							<div class="col-md-6 col-lg-6 col-xl-4 d-flex">
   								<div class="text w-100 pl-md-3">
   									<h2><a href="{{ route("singlePost", ['id' => $p->id]) }}">{{$p->title}}</a></h2>

   									<div class="meta">
   										<span><a href="#">{{$p->updated_at}}</a>  </span>
   									</div>
   								</div>
   							</div>
   						</div>
   					</div>
				   @endforeach
   				</div>
   			</div>
   			<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">

            </div>
          </div>
        </div>
   		</div>
       </section>

       @endsection