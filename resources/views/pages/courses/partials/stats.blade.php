 {{-- Member 2: Key statistics --}}
<section id="course-stats" class="course-stats">
    <div class="container">
        <p>
            Duration: {{ $course['duration'] ?? '-' }} |
            Credits: {{ $course['credits'] ?? '-' }} |
            Study mode: {{ $course['study_mode'] ?? '-' }} |
            Lecture option: {{ $course['lecture_option'] ?? '-' }}
        </p>
    </div>
</section>