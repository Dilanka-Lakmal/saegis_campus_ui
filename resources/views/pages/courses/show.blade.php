@extends('layouts.app')

@section('title', $course['title'] . ' - Saegis Campus')

@section('content')
    <section class="container py-5">
        <p>Duration: {{ $course['duration'] }} | Credits: {{ $course['credits'] }}</p>
    </section>
@endsection