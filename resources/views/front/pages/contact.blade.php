@extends('layouts.template')
@section('title')
    Contact us
@endsection
@section('nav-text')
    <p>Feel free to send us message!</p>
@endsection

@section('content')

    @include('front.components.contact_form')

    @endsection