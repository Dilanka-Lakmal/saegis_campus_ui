<?php

namespace App\Http\Controllers;

class FacultyController extends Controller
{
    public function management()
    {
        return view('pages.faculties.management', [
            'pageBanner' => [
                'title' => 'Faculty of Management, Humanities & Social Sciences',
                'subtitle' => "Empowering tomorrow's leaders",
            ],
        ]);
    }

    public function computing()
    {
        return view('pages.faculties.computing', [
            'pageBanner' => [
                'title' => 'Faculty of Computing & Technology',
                'subtitle' => 'Where technology meets creativity, and possibilities are endless',
            ],
        ]);
    }

    public function graduate()
    {
        $courses = require resource_path('data/courses/courses.php');
        $list    = require resource_path('data/faculties/graduate-studies.php');

        return view('pages.faculties.graduate-studies', [
            'courses'    => $this->cards($list, $courses),
            'pageBanner' => [
                'title'    => 'Faculty of Graduate Studies',
                'subtitle' => 'The right place for your Higher Education!',
            ],
        ]);
    }

    public function international()
    {
        $courses = require resource_path('data/courses/courses.php');
        $groups  = require resource_path('data/faculties/international-studies.php');

        return view('pages.faculties.international-programmes', [
            'groups'     => array_map(fn ($slugs) => $this->cards($slugs, $courses), $groups),
            'pageBanner' => [
                'title'    => 'International Programmes',
                'subtitle' => 'The right place for your Higher Education!',
            ],
        ]);
    }

    // Turns a list of slugs into card records; unknown slugs are skipped.
    private function cards(array $slugs, array $courses): array
    {
        $summaries = require resource_path('data/faculties/summaries.php');
        $cards = [];

        foreach ($slugs as $slug) {
            if (!isset($courses[$slug])) {
                continue;
            }

            $cards[] = [
                'slug'    => $slug,
                'title'   => $courses[$slug]['title'],
                'summary' => $summaries[$slug] ?? '',
            ];
        }

        return $cards;
    }
}