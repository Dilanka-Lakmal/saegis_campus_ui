<?php

namespace App\Http\Controllers;

class FacultyController extends Controller
{
    public function management()
    {
        return view('pages.faculties.management');
    }

    public function computing()
    {
        return view('pages.faculties.computing');
    }
}