@extends('layouts.template')


@section('title')
    ReadIt blog - All posts
@endsection
@section('content')

 @section('nav-text')
     <p>Our all posts...</p>
     @endsection



<section class="ftco-section">
    <div class="container">
        <form action="#" class="search-form">
            <div class="form-group">

                <input type="text" class="form-control" id="search" name="search" placeholder="Type a title">
                <br/>
        <!--       <input type="submit" value="Find" id="find" name="find" class="btn btn-primary pill text-white px-5 py-2">-->
            </div>
        </form>
        <div class="row d-flex" id="posts">

            @foreach($posts as $p)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="#" class="block-20" style="background-image: url('{{asset('/images/'.$p->path_new) }}');">
                    </a>
                    <div class="text p-4 float-right d-block">
                        <div class="topper d-flex align-items-center">
                       <span class="mos">{{$p->updated_at}}</span>

                        </div>
                        <h3 class="heading mb-3"><a href="{{ route("singlePost", ['id' => $p->id]) }}">{{$p->title}}</a></h3>

                        <p>{!!substr(strip_tags($p->text), 0, 130)!!} ...</p>
                        <p><a href="{{ route("singlePost", ['id' => $p->id]) }}" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
                    </div>
                </div>
            </div>

                @endforeach


        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul id="links">
{{$posts->links()}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

    @endsection

@section('scripts')

@endsection