
@extends('layouts.template')

@section('title')
    About author
@endsection

@section('nav-text')

@endsection

@section('content')


    <section class="ftco-section ftco-degree-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <h2 class="mb-3">Marijana Mitrovic</h2>
                    <p> My name is Marijana Mitrovic. I am 23 years old and I am currently attending my final year of studies at ICT college. This website was made using Laravel framework, for purposes of PHP2 course. </p>
                    <p class="mb-5">
                        <img width="200px" height="400px" src="{{asset('/images/author.jpg') }}" alt="author "class="img-fluid">
                    </p>


                </div>
            </div>
        </div>
        </div>

    </section> <!-- .section -->
@endsection

