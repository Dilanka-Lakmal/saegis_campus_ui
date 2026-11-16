@extends('layouts.app')

@section('title', 'International Programmes')

@section('content')
    <section class="faculty-page">
        @foreach ($groups as $groupName => $courses)
            <section class="management-section">
                <div class="management-container">

                    <div class="section-heading">
                        <h2>{{ $groupName }}</h2>
                    </div>

                    <ul class="programme-list">
                        @foreach ($courses as $course)
                            <li>
                                <a href="{{ route('courses.show', $course['slug']) }}">{{ $course['title'] }}</a>
                                @if (!empty($course['summary']))
                                    <p>{{ $course['summary'] }}</p>
                                @endif
                            </li>
                        @endforeach
                    </ul>

                </div>
            </section>
        @endforeach
    </section>
@endsection