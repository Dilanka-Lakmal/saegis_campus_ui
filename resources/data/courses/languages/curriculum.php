

<?php

// resources/data/courses/languages/curriculum.php
// Source: live Saegis course pages. Only obvious typos and numbering were cleaned.
//
// Keys inside 'semesters' can be numbers (shown as "Semester 1") or text labels
// (shown as written, e.g. 'First 3 Months'). See the note in the partial.

return [

    'ba-english' => [
        'semesters' => [
            1 => ['Review of Grammar', 'Reading Comprehension I', 'Writing Practice I', 'Introduction to English Literature', 'Information Technology for English'],
            2 => ['Reading Comprehension II', 'Writing Practice II', 'Introduction to Linguistics', 'British Literature I', 'Commonwealth Poetry', 'Soft Skills Development'],
            3 => ['Creative Writing', 'Phonetics and Phonology in English', 'Morphology', 'British Literature II', 'American Literature I', 'Presentation Skills'],
            4 => ['Syntax', 'Semantics', 'American Literature II', 'Post-Colonial Literature', 'General Psychology', 'Introduction to Business and Management', 'ELT Methodology'],
            5 => ['Sociolinguistics', 'Stylistics', 'Sri Lankan Literature in English', 'Texts and Films', 'Communication Skills for Professionals', 'Principles of Marketing (Business - International and Management)', 'Second Language Acquisition'],
            6 => ['Historical Linguistics', 'Modern English Literature', 'Renaissance Literature', 'Literary Theory and Criticism', 'Personal Grooming', 'Human Resource Management', 'TESL through Literature'],
        ],
        'entry_requirements' => [
            'Students who have obtained three (03) simple passes (S) in Local A/L in one and the same sitting with English as a subject, or',
            'Students who have obtained three (03) simple passes (S) in Local A/L in one and the same sitting with a credit pass in English Language at the GCE O/L and a pass in General English at the GCE A/L, or',
            'Students who have obtained three (03) simple passes (S) in Local A/L in one and the same sitting with a pass at the Special Entry Test held by the institution.',
        ],
    ],

    // The live page shows no course contents or entry requirements for this
    // certificate, so the page will display the "coming soon" messages for now.
    'dual-certificate-english-it' => [
        'semesters' => [],
        'entry_requirements' => [],
    ],

    // Programme Module on the live page: "First 3 months" / "Last 3 months".
    'diploma-english' => [
        'semesters' => [
            'First 3 Months' => [
                'New Headway – Pre Intermediate Book (4th Edition, Oxford Press)',
                'Four language skills: Reading, Writing, Speaking, Listening',
            ],
            'Last 3 Months' => [
                'New Headway – Intermediate Book (4th Edition, Oxford Press)',
                'Four language skills: Reading, Writing, Speaking, Listening',
                'Everyday English usage',
            ],
        ],
        'entry_requirements' => [
            'Applicants must meet one of the following entry requirements and fulfil other entry criteria as per the by-laws of Saegis Campus:',
            'Local O/Level or A/Level conducted by the Department of Examinations – Sri Lanka.',
            'Any other equal qualification which may be considered for registration on a case-by-case basis.',
            'Be at least 16 years old on the day of registering for the diploma.',
        ],
    ],

];