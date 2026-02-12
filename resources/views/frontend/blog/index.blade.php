@extends('layouts.frontend')
@section('title', "Blog | Ceylon Green Clean")
@section('meta_description', 'Read our latest blog posts about eco-friendly cleaning tips, sustainable living, and professional cleaning insights from Ceylon Green Clean.')
@section('meta_keywords', 'cleaning blog, eco-friendly tips, green cleaning, Ceylon Green Clean blog')

@section('content')
    @include('frontend.blog.banner')
    @include('frontend.blog.blog')
@endsection
