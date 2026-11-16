<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyController;
use App\Models\HeroSlide;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    $heroSlides = HeroSlide::where('is_active', true)
        ->orderBy('order')
        ->get();

    return view('home', compact('heroSlides'));
})->name('home');

// Faculty pages
Route::get('/faculty-of-management', [FacultyController::class, 'management'])->name('faculty.management');
Route::get('/faculty-of-computing', [FacultyController::class, 'computing'])->name('faculty.computing');

// Department pages
Route::get('/department-of-management', [DepartmentController::class, 'management'])->name('department.management');
Route::get('/department-of-languages', [DepartmentController::class, 'languages'])->name('department.languages');
Route::get('/department-of-computing', [DepartmentController::class, 'computing'])->name('department.computing');

// Course details
Route::get('/courses/{slug}', [CourseController::class, 'show'])->name('courses.show');