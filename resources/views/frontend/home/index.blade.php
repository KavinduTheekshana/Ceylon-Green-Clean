@extends('layouts.frontend')

@section('content')
    @include('frontend.home.slider')
    @include('frontend.home.about')
    @include('frontend.home.services')
    @include('frontend.home.chooseUs')
    @include('frontend.home.testimonial')
    @include('frontend.home.cta')
    @include('frontend.home.count')
    @include('frontend.home.trust')

@endsection
