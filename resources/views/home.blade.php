@extends('layouts.app')

@section('title', 'Welcome to Saegis Campus')

@section('content')
    @include('home.hero')
    @include('home.faculties')
    @include('home.introduction')
    @include('home.course-categories')
    @include('home.campus-features')
    @include('home.news-events')
    @include('home.testimonials')
    @include('home.partners')
    @include('partials.register-modal')
@endsection