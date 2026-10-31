<?php

namespace App\Http\Controllers;

class CourseController extends Controller
{
    public function show(string $slug)
    {
        $base = resource_path('data/courses');
        $courses = require $base . '/courses.php';

        abort_unless(isset($courses[$slug]), 404);

        $course = $courses[$slug];
        $dept = $course['department'];

        $overview   = (require $base . "/{$dept}/overview.php")[$slug] ?? [];
        $curriculum = (require $base . "/{$dept}/curriculum.php")[$slug] ?? [];

        $course = array_merge($course, $overview, $curriculum);

        return view('pages.courses.show', [
            'course' => $course,
            'pageBanner' => [
                'title' => $course['title'],
                'subtitle' => $course['tagline'],
            ],
        ]);
    }
}