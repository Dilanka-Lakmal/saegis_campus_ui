<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relationship to Department
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // Relationship to Course Category
    public function category()
    {
        return $this->belongsTo(CourseCategory::class);
    }

    // Relationship to Semesters
    public function semesters()
    {
        return $this->hasMany(CourseSemester::class)->orderBy('semester_number');
    }

    // Relationship to Entry Requirements
    public function entryRequirements()
    {
        return $this->hasMany(CourseEntryRequirement::class)->orderBy('order');
    }
}
