@extends('layouts.app')

@section('title', 'Faculty of Graduate Studies')

@section('content')
    <section class="faculty-page">
        <section class="management-section" id="programmes">
            <div class="management-container">

                <div class="section-heading">
                    <span class="section-label">POSTGRADUATE STUDIES FOR YOU</span>
                    <h2>Our Programmes</h2>
                    <p>Explore our postgraduate programmes.</p>
                </div>

                <ul class="programme-list">
                    @foreach ($courses as $course)
                        <li>
                            <a href="{{ route('courses.show', $course['slug']) }}">{{ $course['title'] }}</a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </section>
    </section>
@endsection