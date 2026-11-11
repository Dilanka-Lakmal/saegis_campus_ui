<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Seed Faculty
        $facultyId = DB::table('faculties')->insertGetId([
            'name' => 'Faculty of Management, Humanities & Social Sciences',
            'slug' => 'faculty-of-management',
            'tag' => 'Faculty',
            'icon' => 'fa-building-columns',
            'image' => 'images/department/management.jpg',
            'description' => 'Empowering tomorrow\'s leaders - Learn to lead, inspire, and achieve with us!',
            'link' => '/faculty-of-management',
            'created_at' => now(), 'updated_at' => now()
        ]);

        // 2. Seed Department
        $deptId = DB::table('departments')->insertGetId([
            'faculty_id' => $facultyId,
            'name' => 'Department of Management',
            'slug' => 'department-of-management',
            'card_number' => '01 / DEPARTMENT',
            'description' => 'Explore management education, business knowledge, leadership, and professional development.',
            'hero_image' => 'images/faculty/management/hero/department-of-management.jpg',
            'created_at' => now(), 'updated_at' => now()
        ]);

        // 3. Seed Category
        $catId = DB::table('course_categories')->insertGetId([
            'name' => 'Undergraduate Degrees', 
            'slug' => 'undergraduate',
            'icon' => 'fa-graduation-cap', 
            'description' => 'Four-year UGC-recognized honours degree programmes.',
            'created_at' => now(), 'updated_at' => now()
        ]);

        // 4. Seed Course (BBM Honours)
        $courseId = DB::table('courses')->insertGetId([
            'department_id' => $deptId,
            'category_id' => $catId,
            'title' => 'Bachelor of Business Management Honours',
            'slug' => 'bbm-honours',
            'image' => '/images/programs/management/bachelor-of-business-management-honours-1756411095.jpg',
            'short_description' => 'The Bachelor of Business Management (Honours) Degree is a four-year academic program comprising 120 credits.',
            'overview' => 'The Bachelor of Business Management (Honours) Degree is designed to provide students with a solid foundation in core management principles.',
            'why_follow' => 'Designed to meet local and global industry demand with practical management training.',
            'duration' => '48 Months', 
            'credits' => 120, 
            'study_mode' => 'On Site', 
            'lecture_option' => 'Weekdays',
            'created_at' => now(), 'updated_at' => now()
        ]);

        // 5. Seed Semester 1 & Subjects
        $sem1Id = DB::table('course_semesters')->insertGetId([
            'course_id' => $courseId, 
            'semester_number' => 1, 
            'title' => 'Semester 1',
            'created_at' => now(), 'updated_at' => now()
        ]);

        $subjects = ['Principles of Management', 'Microeconomics', 'Business Mathematics', 'Financial Accounting', 'Information and Communication Technology', 'Business Communication'];
        foreach ($subjects as $index => $subject) {
            DB::table('course_subjects')->insert([
                'semester_id' => $sem1Id, 
                'subject_name' => $subject, 
                'order' => $index + 1,
                'created_at' => now(), 'updated_at' => now()
            ]);
        }

        // 6. Seed Entry Requirements
        DB::table('course_entry_requirements')->insert([
            'course_id' => $courseId,
            'requirement' => 'Three "S" passes in any stream at one and the same sitting at the GCE (Advanced Level) Examination conducted by the Department of Examinations of Sri Lanka, or an equivalent qualification.',
            'created_at' => now(), 'updated_at' => now()
        ]);
    }
}