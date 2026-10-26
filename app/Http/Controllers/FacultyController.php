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
}