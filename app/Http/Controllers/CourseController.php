<?php

namespace App\Http\Controllers;

class CourseController extends Controller
{
    public function show(string $slug)
    {
        $courses = require resource_path('data/courses/courses.php');

        abort_unless(isset($courses[$slug]), 404);

        $course = $courses[$slug];

        return view('pages.courses.show', [
            'course' => $course,
            'pageBanner' => [
                'title' => $course['title'],
                'subtitle' => $course['tagline'],
            ],
        ]);
    }
}