<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSemester extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relationship to Subjects
    public function subjects()
    {
        return $this->hasMany(CourseSubject::class)->orderBy('order');
    }
}
