

<aside id="entry-requirements" class="course-curriculum__entry">
    <h2 class="course-curriculum__heading">Entry Requirements</h2>

    <ul class="course-curriculum__entry-list">
        @forelse (($course['entry_requirements'] ?? []) as $line)
            <li>{{ $line }}</li>
        @empty
            <li>Entry requirements will be announced soon.</li>
        @endforelse
    </ul>
</aside>