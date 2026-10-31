@extends('layouts.app')

@section('title', $course['title'] . ' - Saegis Campus')

@section('content')
    @include('pages.courses.partials.sticky-nav')
    @include('pages.courses.partials.overview')
    @include('pages.courses.partials.stats')
    @include('pages.courses.partials.why-follow')

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @include('pages.courses.partials.curriculum')
            </div>
            <div class="col-lg-4">
                @include('pages.courses.partials.entry-requirements')
            </div>
        </div>
    </div>

    @include('pages.courses.partials.inquiry-form')
    @include('pages.courses.partials.partners')
@endsection