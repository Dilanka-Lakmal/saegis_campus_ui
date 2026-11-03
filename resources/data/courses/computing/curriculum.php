<?php

// resources/data/courses/computing/curriculum.php
// Source: live Saegis course pages. Only obvious typos and broken line splits were cleaned.
//
// Each semester is either a plain list of subjects, or an array with
// 'subjects', 'electives_label' and 'electives' (shown in the same card).

// Ministry computing degrees (BSc Computer Science, BSc Software Engineering).
$ministryComputingEntry = [
    'Minimum academic qualifications:',
    'a) Passes in three (03) subjects (in Physical Science Stream or any three subjects with Mathematics and Physics) at the GCE A/L Examination (Sri Lanka or London) in one and the same sitting but not exceeding three sittings.',
    'OR',
    'b) Passes in three (03) subjects (in any subject stream) at the GCE A/L Examination (Sri Lanka or London) in one and the same sitting but not exceeding three sittings and passing of the Bridging Programme for Computing Discipline stated under the Non-State Higher Education Circular No. 02/2019 issued by the Ministry of Higher Education (according to the passing criteria stated in the same).',
    'AND',
    'c) Minimum of 30% for the Common General Test in any of the settings indicated in a) or b) above.',
];

// Pearson BTEC HND programmes in computing. The live pages show this text
// run together, so the options are separated here. Please verify the wording.
$hndComputingEntry = [
    'GCE O/L (Local/London) 6 simple passes including English WITH GCE A/L (Local/London) minimum 2 passes in any stream',
    'OR GCE O/L (Local/London) 6 passes AND sat for the GCE A/L',
    'OR GCE O/L (Local/London) 6 simple passes including English AND a recognized diploma programme with a recognized qualification in Computing',
    'OR Successfully completed the Diploma in Management & IT offered by the Saegis Campus',
];

return [

    'bsc-computer-science' => [
        'semesters' => [
            1 => ['Fundamentals of Computer Systems', 'Fundamentals of Programming', 'Fundamentals of Mathematics', 'Computer Architecture and Organization', 'Database Management Systems', 'English', 'Leadership'],
            2 => ['Operating Systems', 'Object Oriented Programming', 'Data Communication and Networks', 'Software Engineering', 'Probability and Statistics', 'Group Project in Programming', 'Scientific Communication'],
            3 => ['Object Oriented Analysis and Design', 'Data Structures and Algorithms', 'Graphics and Visual Computing', 'Web Technologies', 'Advanced Databases', 'Advanced Mathematics'],
            4 => ['Introduction to Artificial Intelligence', 'Human Computer Interaction', 'Software Architecture and Design Patterns', 'Service Oriented Web Applications', 'Deductive Reasoning and Logic Programming', 'Statistical Distribution and Inferences', 'Software Project Management', 'Software Quality Assurance'],
            5 => [
                'subjects' => ['Computer Vision', 'Machine Learning', 'Professional Practices in Computing', 'Research Methodology', 'Network and Data Security', 'Independent Literature Review', 'Systems Programming'],
                'electives_label' => 'Elective Subjects (Choose 2)',
                'electives' => ['Theory of Programming Languages', 'Bioinformatics', 'Data Mining and Warehousing', 'Wireless and Mobile Computing', 'Linear Programming', 'Modeling and Simulation', 'Numerical Methods'],
            ],
            6 => ['Industrial Training'],
            7 => [
                'subjects' => ['Software Process Improvement', 'Software Verification and Validation', 'Big Data Analytics', 'Embedded Systems Development', 'Formal Methods in Software Development', 'Enterprise Modelling Ontology', 'Robotics', 'Research Project (initiated in Semester 7; with 8 credits added to Semester 8 for completion)', 'Entrepreneurship'],
                'electives_label' => 'Elective Subjects (Choose 1)',
                'electives' => ['Digital Forensics', 'Fuzzy Logic', 'Multi Agent Systems', 'Secure Programming', 'Computational Linguistics', 'Crypto Currency and Blockchain Technologies'],
            ],
            8 => [
                'subjects' => ['Theory of Compilers', 'Software Maintenance and Re-Engineering', 'Engineering Economics', 'Cloud Computing and IOT', 'Deep Learning Architectures', 'Research Project (Completion – 8 credits added to Semester 8)'],
                'electives_label' => 'Elective Subjects (Choose 1)',
                'electives' => ['Natural Language Processing', 'High Performance Computing', 'Emerging Trends in Computing', 'Philosophy of Science', 'Game Development'],
            ],
        ],
        'entry_requirements' => $ministryComputingEntry,
    ],

    // The live page shows no subjects, only a "Download Course Contents" link.
    // Add the semesters here after reading that document.
    'bsc-software-engineering' => [
        'semesters' => [],
        'entry_requirements' => $ministryComputingEntry,
    ],

    'bsc-information-technology' => [
        'semesters' => [
            1 => ['Introduction to Information Technology', 'Fundamentals of Programming', 'Fundamentals of Mathematics', 'Computer Architecture and Organization', 'Database Management Systems', 'Office Automation and Productivity Tools', 'English', 'Leadership'],
            2 => ['Operating Systems', 'Object Oriented Programming', 'Data Communication and Networks', 'Software Engineering', 'Probability and Statistics', 'Group Project in Programming', 'Scientific Communication', 'Managing People and Organisation'],
            3 => ['Object Oriented Analysis and Design', 'Data Structures and Algorithms', 'Business Analytics', 'Web Technologies', 'Advanced Databases', 'Advanced Mathematics', 'Information Technology Management'],
            4 => ['Human Computer Interaction', 'Graphics and Visual Computing', 'Service Oriented Web Applications', 'E-Commerce', 'Group Project in Software Engineering', 'Software Project Management', 'Software Quality Assurance', 'Programming Frameworks'],
            5 => [
                'subjects' => ['Computer and Network Security', 'Enterprise Modelling and Architectures', 'Professional Practices in Computing', 'Research Methodology', 'Wireless and Mobile Computing', 'Agile System Developments', 'Information Security and Risk Management'],
                'electives_label' => 'Elective Subjects (Choose 2)',
                'electives' => ['Introduction to Artificial Intelligence', 'Bioinformatics', 'Data Mining and Warehousing', 'Business Intelligence', 'Ethical Hacking', 'Computational Thinking and Problem Solving'],
            ],
            6 => ['Industrial Training'],
            7 => [
                'subjects' => ['Big Data Analytics', 'Green IT', 'Crypto Currency and Blockchain Technologies', 'Secure Programming', 'Research Project (Year-long) (project initiated in Semester 7, credits added in Semester 8)'],
                'electives_label' => 'Elective Subjects (Choose 2)',
                'electives' => ['Robotics', 'Semantic Web and Ontological Modelling', 'Business Process Management', 'Systems and Network Administration', 'Database Administration'],
            ],
            8 => [
                'subjects' => ['Cyber Security', 'Parallel and Distributed Computing', 'Cloud Computing and IOT', 'Emerging Trends in Computing', 'Research Project (Completion) (8 credits added to Semester 8)'],
                'electives_label' => 'Elective Subjects (Choose 2)',
                'electives' => ['Enterprise Computing', 'Digital Forensics', 'Game Development', 'Entrepreneurship'],
            ],
        ],
        'entry_requirements' => [
            'a) Passes in three (03) subjects (in Physical Science Stream or any three subjects with Mathematics and Physics) at the GCE A/L Examination (Sri Lanka or London) in one and the same sitting but not exceeding three sittings.',
            'b) Passes in three (03) subjects (in any subject stream) at the GCE A/L Examination (Sri Lanka or London) in one and the same sitting but not exceeding three sittings and passing of the Bridging Programme for Computing Discipline stated under the Non-State Higher Education Circular No. 02/2019 issued by the Ministry of Higher Education (according to the passing criteria stated in the same).',
            'AND',
            'c) Minimum of 30% for the Common General Test in any of the settings indicated in a) or b) above.',
        ],
    ],

    'bit' => [
        'semesters' => [
            1 => ['Fundamentals of Information Technology', 'Mathematics for Computing', 'Descriptive Statistics and Probability', 'Office Automation and Productivity Tools', 'Operating Systems', 'Programming Fundamentals using Java', 'Communication Skills'],
            2 => ['Fundamentals of Database Management', 'Business Management', 'Introduction to System Development', 'Web Technologies', 'Multimedia Technologies', 'Soft Skills & Entrepreneurship Skills'],
            3 => ['Object Oriented Programming', 'Data Communication & Computer Networks', 'Human Computer Interactions', 'Information Assurance and Security', 'Social and Professional Issues', 'Software Engineering'],
            4 => ['Object Oriented System Development', 'Agile System Developments', 'Research Methodology for IS', 'e-Business Technologies', 'IT Project Management', 'Service Oriented Computing', 'Advanced Data Management', 'Mobile Application Development', 'IT Management and Enterprise Modeling'],
            5 => ['IT Project (Individual)', 'Technopreneurs', 'Cloud Computing', 'Systems and Network Administrations'],
            6 => ['Industry Internship'],
        ],
        'entry_requirements' => [
            'Three (3) Simple passes ("S") in any stream in one and the same sitting at the GCE (Advanced Level) Examination conducted by the Department of Examinations of Sri Lanka or equivalent qualification.',
        ],
    ],

    'hnd-network-engineering' => [
        'semesters' => [
            1 => ['Programming', 'Networking', 'Professional Practice', 'Database Design and Development'],
            2 => ['Security', 'Planning a Computing Project', 'Web Design and Development', 'Computer System Architecture'],
            3 => ['Transport Network Design', 'Cloud Computing', 'Network Security', 'Computing Research Project'],
            4 => ['Business Process Support', 'User Experience and Interface Design', 'Operating Systems'],
        ],
        'entry_requirements' => $hndComputingEntry,
    ],

    'beng-software-engineering' => [
        'semesters' => [
            1 => ['Programming Frameworks & Languages', 'Cybersecurity'],
            2 => ['Human Computer Interaction', 'Final Project 01'],
            3 => ['Advanced Operating Systems', 'Final Project 02'],
        ],
        'entry_requirements' => [
            'Successful completion of a BTEC Higher National Diploma (HND) in Software Engineering',
            'Successful completion of an SQA Advanced Diploma (AD)',
            'Successful completion of a NIBM Higher Diploma (HD) in Software Engineering',
            'Any other equivalent qualification recognized by the institution',
        ],
    ],

    'foundation-diploma-it' => [
        'semesters' => [
            1 => ['Introduction to Robotics & Automation', 'Website Development', 'Technology Systems', 'IT Project Management'],
            2 => ['Technology Systems', 'Emerging Trends and Technologies', 'Using Social Media in Business', '2D & 3D Graphics'],
        ],
        'entry_requirements' => [
            'Pass G.C.E O/L (local/London) examination with six ordinary passes including Mathematics and English',
            'OR Any other equivalent qualification acceptable to the Senate of the Saegis Campus.',
        ],
    ],

    'bsc-data-computing-intelligence' => [
        'semesters' => [
            1 => ['Cybersecurity', 'Artificial Intelligence'],
            2 => ['Applied Data in Action', 'Programming Frameworks and Languages'],
            3 => ['Computing Final Dissertation'],
        ],
        'entry_requirements' => [
            'Successful completion of a Pearson BTEC Level 5 HND in Computing (Data Analytics)',
            'OR',
            'Successful completion of a Pearson BTEC Level 5 HND in Digital Technologies (Artificial Intelligence (AI) Solutions and Applications)',
            'OR',
            'Any other equivalent qualification recognized by the institution',
        ],
    ],

    'bsc-computer-forensics-cybersecurity' => [
        'semesters' => [
            1 => ['Cybersecurity', 'Digital Forensics and Ethical Hacking'],
            2 => ['Advanced Operating Systems', 'Smart Systems'],
            3 => ['Individual Study'],
        ],
        'entry_requirements' => [
            'Successful completion of a Pearson BTEC Level 5 HND in Computing (Network Engineering)',
            'OR',
            'Successful completion of a Pearson BTEC Level 5 HND in Digital Technologies (Cybersecurity)',
            'OR',
            'Any other equivalent qualification recognized by the institution',
        ],
    ],

    'btec-ai' => [
        'semesters' => [
            1 => ['Business Intelligence', 'Internet of Things', 'Emerging Technologies', 'Risk Analysis and Systems Testing'],
            2 => ['Programming', 'Professional Practice in the Digital Economy', 'Innovation & Digital Transformation', 'Cybersecurity'],
            3 => ['Application Development', 'Application Program Interfaces', 'Work-based Learning in the Digital Economy', 'Digital Sustainability'],
            4 => ['Big Data & Visualization', 'Cloud Fundamentals', 'Software Development Lifecycles', 'Fundamentals of Artificial Intelligence (AI) & Intelligent Systems'],
        ],
        'entry_requirements' => $hndComputingEntry,
    ],

    'btec-cybersecurity' => [
        'semesters' => [
            1 => ['Programming', 'Professional Practice in the Digital Economy', 'Innovation & Digital Transformation', 'Cybersecurity'],
            2 => ['Big Data & Visualization', 'Networking in the Cloud', 'Security', 'Networking'],
            3 => ['Business Intelligence', 'Internet of Things', 'Emerging Technologies', 'Applied Security in the Cloud'],
            4 => ['Applied Cryptography in the Cloud', 'Information Security Management in the Cloud', 'Work-based Learning in the Digital Economy', 'Digital Sustainability'],
        ],
        'entry_requirements' => $hndComputingEntry,
    ],

];
