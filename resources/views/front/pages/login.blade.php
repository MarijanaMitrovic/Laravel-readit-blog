@extends('layouts.template')

     @section('title')
         Login
    @endsection

@section('nav-text')
    <p>Welcome back!</p>
@endsection

@section('content')

   @include('front.components.login_form')

    @endsection

