<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Faculties Table
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('tag')->default('Faculty');
            $table->string('icon')->default('fa-building-columns');
            $table->string('image');
            $table->text('description');
            $table->string('link');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // 2. Departments Table
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('faculty_id')->constrained('faculties')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('card_number');
            $table->text('description');
            $table->string('hero_image');
            $table->timestamps();
        });

        // 3. Course Categories Table
        Schema::create('course_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('icon')->default('fa-graduation-cap');
            $table->text('description')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // 4. Courses Table
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('course_categories')->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image');
            $table->text('short_description');
            $table->longText('overview')->nullable();
            $table->longText('why_follow')->nullable();
            $table->string('duration')->default('48 Months');
            $table->integer('credits')->default(120);
            $table->string('study_mode')->default('On Site');
            $table->string('lecture_option')->default('Weekdays');
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });

        // 5. Course Semesters Table
        Schema::create('course_semesters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->integer('semester_number');
            $table->string('title');
            $table->timestamps();
        });

        // 6. Course Subjects Table
        Schema::create('course_subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('semester_id')->constrained('course_semesters')->onDelete('cascade');
            $table->string('subject_name');
            $table->integer('order')->default(0);
            $table->timestamps();
        });

        // 7. Course Entry Requirements Table
        Schema::create('course_entry_requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->text('requirement');
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_entry_requirements');
        Schema::dropIfExists('course_subjects');
        Schema::dropIfExists('course_semesters');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('course_categories');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('faculties');
    }
};