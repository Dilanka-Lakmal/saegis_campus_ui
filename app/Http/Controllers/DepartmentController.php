<?php

namespace App\Http\Controllers;

class DepartmentController extends Controller
{
    public function management()
    {
        return view('pages.departments.dept-management');
    }

    public function languages()
    {
        return view('pages.departments.dept-languages');
    }

    public function computing()
    {
        return view('pages.departments.dept-computing');
    }
}