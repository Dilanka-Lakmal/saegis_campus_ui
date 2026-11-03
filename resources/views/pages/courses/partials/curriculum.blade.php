<section id="course-content" class="course-curriculum">
    <div class="container">
        <h2 class="course-curriculum__heading">Course Contents</h2>

        <div class="course-curriculum__grid">
            @forelse (($course['semesters'] ?? []) as $number => $content)
                @php
                    $subjects  = $content['subjects'] ?? $content;
                    $electives = $content['electives'] ?? [];
                @endphp

                <div class="course-curriculum__card">
                    <h3 class="course-curriculum__title">
                        {{ is_numeric($number) ? 'Semester ' . $number : $number }}
                    </h3>

                    <ul class="course-curriculum__list">
                        @foreach ($subjects as $subject)
                            <li>{{ $subject }}</li>
                        @endforeach
                    </ul>

                    @if (!empty($electives))
                        <p class="course-curriculum__electives-title">
                            {{ $content['electives_label'] ?? 'Elective Subjects' }}
                        </p>
                        <ul class="course-curriculum__list">
                            @foreach ($electives as $elective)
                                <li>{{ $elective }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            @empty
                <p class="course-curriculum__empty">Curriculum coming soon.</p>
            @endforelse
        </div>
    </div>
</section>