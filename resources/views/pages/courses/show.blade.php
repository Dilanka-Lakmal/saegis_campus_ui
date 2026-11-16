@extends('layouts.app')

@section('title', $course['title'] . ' - Saegis Campus')

@section('content')
    {{-- 1. STICKY SUB-NAV (Positioned directly under the main master layout banner) --}}
    @include('pages.courses.partials.sticky-nav')

    {{-- 2. OVERVIEW & STATS --}}
    @include('pages.courses.partials.overview')
    @include('pages.courses.partials.stats')
    @include('pages.courses.partials.why-follow')

    
    {{-- 3. CURRICULUM (Entry Requirements is inside this partial) --}}
@include('pages.courses.partials.curriculum')

    {{-- 4. INQUIRY FORM & PARTNERS --}}
    @include('pages.courses.partials.inquiry-form')
    @include('home.partners')
@endsection