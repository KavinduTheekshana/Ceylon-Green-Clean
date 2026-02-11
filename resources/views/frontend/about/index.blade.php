@extends('layouts.frontend')
@section('title', "About Us | Ceylon Deep Cleaners")
@section('content')
    @include('frontend.about.banner')
    @include('frontend.home.about')
    @include('frontend.about.why')
    @include('frontend.about.faq')
    @include('frontend.about.trust')
@endsection
