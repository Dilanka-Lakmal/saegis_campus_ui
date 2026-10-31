<?php
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\DepartmentController;

Route::get('/', function () {
    return view('home');
});

// Faculty pages
Route::get('/faculty-of-management', [FacultyController::class, 'management'])->name('faculty.management');
Route::get('/faculty-of-computing', [FacultyController::class, 'computing'])->name('faculty.computing');

// Department pages
Route::get('/department-of-management', [DepartmentController::class, 'management'])->name('department.management');
Route::get('/department-of-languages', [DepartmentController::class, 'languages'])->name('department.languages');
Route::get('/department-of-computing', [DepartmentController::class, 'computing'])->name('department.computing');

Route::get('/courses/{slug}', [CourseController::class, 'show'])->name('courses.show');