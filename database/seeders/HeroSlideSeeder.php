<?php

namespace Database\Seeders;

use App\Models\HeroSlide;
use Illuminate\Database\Seeder;

class HeroSlideSeeder extends Seeder
{
    public function run(): void
    {
        $slides = [
            [
                'media_type' => 'video',
                'media_path' => 'videos/campus-hero.mp4',
                'alt_text'   => null,
                'badge'      => 'INTAKE NOW OPEN • SEPTEMBER 2027',
                'title'      => 'Upgrade Your Qualification To A Degree',
                'subtitle'   => 'Fast-track your career with globally recognized undergraduate degrees, HNDs, and professional diplomas designed for future leaders.',
                'highlights' => [
                    ['tagline' => 'BSc (Hons)', 'text' => 'Business Management'],
                    ['tagline' => 'BSc (Hons)', 'text' => 'Computer Science & Software Engineering'],
                    ['tagline' => 'Pearson BTEC', 'text' => 'Higher National Diplomas (HND)'],
                ],
                'cta_text'   => 'Apply Now',
                'cta_url'    => '#',
                'is_modal'   => true,
                'duration'   => 5000,
                'order'      => 1,
            ],
            [
                'media_type' => 'image',
                'media_path' => 'images/banners/img_001.jpg',
                'alt_text'   => 'Saegis Graduation Banner',
                'badge'      => 'GRADUATE WITH DISTINCTION',
                'title'      => 'Empowering Future Leaders & Professionals',
                'subtitle'   => 'Gain world-class education with top-ranked UK university partnerships and industry-driven curricula tailored for global employability.',
                'highlights' => [
                    ['tagline' => 'UK Top-Up', 'text' => 'BEng (Hons) Software Engineering'],
                    ['tagline' => 'MBA', 'text' => 'International Business Management'],
                ],
                'cta_text'   => 'Explore Programmes',
                'cta_url'    => '#',
                'is_modal'   => true,
                'duration'   => 5000,
                'order'      => 2,
            ],
            [
                'media_type' => 'image',
                'media_path' => 'images/banners/img_002.jpg',
                'alt_text'   => 'Saegis Computing Banner',
                'badge'      => 'FACULTY OF COMPUTING',
                'title'      => 'Master Cyber Security, AI & Data Intelligence',
                'subtitle'   => 'Step into the tech industry with hands-on lab training, practical projects, and recognized Pearson BTEC HND qualifications.',
                'highlights' => [
                    ['tagline' => 'BTEC Level 5', 'text' => 'HND in Computing & Network Engineering'],
                    ['tagline' => 'BSc (Hons)', 'text' => 'Cyber Security & Computer Forensics'],
                ],
                'cta_text'   => 'View IT Courses',
                'cta_url'    => '/department-of-computing',
                'is_modal'   => false,
                'duration'   => 5000,
                'order'      => 3,
            ],
            [
                'media_type' => 'image',
                'media_path' => 'images/banners/img_003.jpg',
                'alt_text'   => 'Saegis Management Banner',
                'badge'      => 'FACULTY OF MANAGEMENT',
                'title'      => 'Excellence in Business, Finance & Languages',
                'subtitle'   => 'Accelerate your career in corporate leadership, international marketing, logistics, and professional English communications.',
                'highlights' => [
                    ['tagline' => 'BBM (Hons)', 'text' => 'Human Resources & Marketing'],
                    ['tagline' => 'BA', 'text' => 'English & Dual Certifications'],
                ],
                'cta_text'   => 'Learn More',
                'cta_url'    => '/department-of-management',
                'is_modal'   => false,
                'duration'   => 5000,
                'order'      => 4,
            ],
        ];

        foreach ($slides as $slide) {
            HeroSlide::updateOrCreate(
                ['title' => $slide['title']], // Checks if a slide with this title exists
                $slide                        // Updates it if found, creates it if not
            );
        }
    }
}