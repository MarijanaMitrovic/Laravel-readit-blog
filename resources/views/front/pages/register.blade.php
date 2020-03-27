@extends('layouts.template')

@section('title')
    Register here
@endsection


@section('nav-text')
    <p>Become our member</p>
@endsection
@section('content')

    @include('front.components.register_form')

@endsection