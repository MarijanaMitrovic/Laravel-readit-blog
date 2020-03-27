
    @extends('layouts.template')

    @section('title')
    ReadIt - single post
        @endsection

    @section('nav-text')

    @endsection

@section('content')


    <section class="ftco-section ftco-degree-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <p class="mb-5">
                        <img src="{{asset('/images/'.$post->path_new) }}" alt="{{$post->title}}" class="img-fluid">
                    </p>
                    <h2 class="mb-3">{{$post->title}}</h2>
                    <p> {{$post->text}}</p>


                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">Visits : {{$post->visited}}</a>

                    </div>
                    <div class="pt-5 mt-5">
                        <h3 class="mb-5">{{$post->num_of_com}} Comments</h3>

                        @component('front.components.post.comments', [
                         'comments' => $post->comments
                     ])
                        @endcomponent
                    </div>
                    </div>


                @if(session()->has('user')&&session()->get('user')->role_name=="user")
                    @include('front.components.post.add_comment_form')
                   @endif


                </div>
            </div>
        </div>

    </section> <!-- .section -->
    @endsection
    @section('scripts')

        <script src="{{ asset("js/comments-ajax.js") }}"></script>
    @endsection
