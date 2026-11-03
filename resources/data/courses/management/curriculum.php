<?php

// resources/data/courses/management/curriculum.php
// Source: live Saegis course pages. Only obvious typos were fixed.

$alPasses = [
    'Three "S" passes in any stream at one and the same sitting at the GCE (Advanced Level) Examination conducted by the Department of Examinations of Sri Lanka, or an equivalent qualification.',
];

$hndEntry = [
    'GCE O/L (Local/London) six simple passes including English and Mathematics, and GCE A/L with a minimum of two passes in any stream (Local/London).',
    'Diploma in Management/IT offered at the Saegis Campus.',
    'GCE O/L (Local/London) six simple passes including English and Mathematics, and a recognized Diploma qualification in Business and/or IT (as relevant) of minimum six months duration with sufficient contact hours.',
    'Any other equivalent qualification acceptable to the Senate of the Saegis Campus.',
    'BTEC Level 3 qualification in Business.',
];

return [

    'bbm-honours' => [
        'semesters' => [
            1 => ['Principles of Management', 'Microeconomics', 'Business Mathematics', 'Financial Accounting', 'Information and Communication Technology', 'Business Communication'],
            2 => ['Programming'],
            3 => ['Marketing Management', 'Macroeconomics', 'Business Statistics', 'Business Law', 'Managerial Communication'],
            4 => ['Human Resource Management', 'Organizational Behavior', 'Operations Management', 'Management Accounting', 'E-Commerce & Digital Marketing', 'Interpersonal Skill Development'],
            5 => ['Business Intelligence', 'Internet of Things', 'Emerging Technologies', 'Applied Security in the Cloud'],
            6 => ['Creativity & Innovation', 'Project Management', 'Operational Research', 'Taxation', 'Entrepreneurship & Small Business', 'Interpersonal Skill Development'],
            7 => ['Logistics and Supply Chain Management', 'Auditing and Assurance', 'Financial Management', 'Managing Information', 'Interpersonal Skill Development', 'Public Policy Analysis', 'Economics for Development'],
            8 => ['International Business', 'Financial Risk Management', 'Research Methodology & Data Analysis', 'Interpersonal Skill Development', 'Leadership and Corporate Culture', 'Industry Sociology and Psychology', 'Public Sector Management', 'Social Responsibility and Ethics'],
            9 => ['Strategic Management', 'Business Analytics', 'Investment and Portfolio', 'Interpersonal Skill Development', 'Knowledge Management', 'Business Intelligence'],
            10 => ['Internship in Business Management', 'Information Security & Privacy', 'Business Model Canvas', 'Dissertation in Business Management'],
        ],
        'entry_requirements' => $alPasses,
    ],

    'bbm-hrm' => [
        'semesters' => [
            1 => ['Principles of Management', 'Microeconomics', 'Business Mathematics', 'Financial Accounting', 'Information and Communication Technology', 'Business Communication'],
            2 => ['Marketing Management', 'Macroeconomics', 'Business Statistics', 'Business Law', 'Managerial Communication'],
            3 => ['Organisational Behaviour', 'Operational Management', 'Management Accounting', 'Human Resource Management', 'Financial Management', 'Interpersonal Skills Development'],
            4 => ['Knowledge Management', 'Recruitment', 'Selection and Onboarding', 'Human Resource Learning and Development', 'Performance and Reward Management', 'Industrial Relations', 'Interpersonal Skills Development'],
            5 => ['Industrial Sociology and Psychology', 'Employment Law', 'Dispute Settlement and Negotiation', 'Managing Information', 'Interpersonal Skills Development', 'Creativity and Innovation', 'Ethics in Human Resource Management'],
            6 => ['Project Human Resource Management', 'Workplace Counselling', 'Research Methodology', 'Strategic Management', 'Human Resource Information Systems', 'Interpersonal Skills Development'],
            7 => ['Strategic Human Resource Management', 'Contemporary Issues in Human Resource Management', 'Human Resource Metrics and Analytics', 'International Human Resource Management', 'Interpersonal Skills Development', 'Leadership and Corporate Culture', 'HR Audit'],
            8 => ['Sustainable Human Resource Management', 'Dissertation in Human Resource Management', 'Internship in Human Resource Management'],
        ],
        'entry_requirements' => $alPasses,
    ],

    'bbm-marketing' => [
        'semesters' => [
            1 => ['Principles of Management', 'Microeconomics', 'Business Mathematics', 'Financial Accounting', 'Information and Communication Technology', 'Business Communication'],
            2 => ['Marketing Management', 'Macroeconomics', 'Business Statistics', 'Business Law', 'Managerial Communication'],
            3 => ['Organizational Behavior', 'Operations Management', 'Management Accounting', 'Social Media & Digital Marketing', 'Creativity & Innovation', 'Interpersonal Skill Development'],
            4 => ['Human Resource Management', 'Consumer Behavior', 'Operational Research', 'Sales and Retail Management', 'Integrated Marketing Communication', 'Interpersonal Skill Development'],
            5 => ['Logistics and Supply Chain Management', 'Service Marketing', 'Financial Management', 'Managing Information', 'Interpersonal Skill Development', 'Food and Agricultural Marketing', 'Brand Management'],
            6 => ['Global Marketing', 'Sustainability Marketing', 'Research Methodology & Data Analysis', 'Interpersonal Skill Development', 'Customer Relationship Management', 'Public Sector Marketing', 'Event Management'],
            7 => ['Strategic Management', 'Business Analytics', 'Strategic Marketing Management', 'Interpersonal Skill Development', 'Marketing Research', 'Entrepreneurship & Small Business'],
            8 => ['Contemporary Issues in Marketing', 'Internship in Marketing', 'Dissertation in Marketing'],
        ],
        'entry_requirements' => $alPasses,
    ],

    'bbm-accounting-finance' => [
        'semesters' => [
            1 => ['Principles of Management', 'Microeconomics', 'Business Mathematics', 'Financial Accounting', 'Information Communication Technology', 'Business Communication'],
            2 => ['Marketing Management', 'Macroeconomics', 'Business Statistics', 'Business Law', 'Managerial Communication'],
            3 => ['Organizational Behavior', 'Operations Management', 'Management Accounting', 'Human Resource Management', 'Financial Management', 'Interpersonal Skill Development'],
            4 => ['Accounting and Financial Modelling', 'Financial Reporting', 'Computerized Accounting', 'Taxation', 'Financial Markets and Institutions', 'Interpersonal Skill Development'],
            5 => ['Corporate Reporting', 'Auditing and Assurance', 'Financial Statement Analysis and Valuation', 'Managing Information', 'Interpersonal Skill Development', 'Public Sector Accounting and Finance', 'Contemporary Issues in Accounting & Finance'],
            6 => ['Investment and Portfolio Management', 'Financial Risk Management', 'Research Methodology & Data Analysis', 'Advanced Accounting Theory', 'Interpersonal Skill Development', 'Forensic and Investigative Accounting', 'Microfinance'],
            7 => ['Strategic Management', 'Business Analytics', 'International Finance', 'Strategic Management Accounting', 'Interpersonal Skill Development', 'Business Intelligence', 'Corporate Governance and Ethics'],
            8 => ['Business Valuation', 'Dissertation in Accounting & Finance', 'Internship in Accounting & Finance'],
        ],
        'entry_requirements' => [
            'Three "S" passes in any stream at one and the same sitting at the GCE (Advanced Level) Examination conducted by the Department of Examinations of Sri Lanka, or an equivalent qualification.',
            'A Credit ("C") pass for Mathematics at the GCE (Ordinary Level) Examination conducted by the Department of Examinations of Sri Lanka, or an equivalent qualification.',
        ],
    ],

    'bbm-logistics-scm' => [
        'semesters' => [
            1 => ['Principles of Management', 'Microeconomics', 'Business Mathematics', 'Financial Accounting', 'Information and Communication Technology', 'Business Communication'],
            2 => ['Marketing Management', 'Macroeconomics', 'Business Statistics', 'Business Law', 'Managerial Communication'],
            3 => ['Human Resource Management', 'Organizational Behavior', 'Operations Management', 'Logistics and Transportation', 'Multimodal Transport Networks', 'Interpersonal Skill Development'],
            4 => ['Supply Chain Management', 'Project Management', 'Operational Research', 'Transport Contracts & Regulations', 'Entrepreneurship & Small Business'],
            5 => ['Legal Aspects of Carriage', 'Maritime Logistics', 'Aviation Logistics', 'Road Transportation and Retail Distribution', 'Occupational Health and Safety'],
            6 => ['Management Information Systems for Supply Chains', 'Procurement and Sourcing', 'Research Methodology & Data Analysis', 'Supply Chain Modelling and Analysis', 'Inventory & Warehouse Management'],
            7 => ['Strategic Management', 'Transport and Logistics Planning', 'Social Impact & Environmental Evaluations of SCM', 'Port Operation and Management', 'Design and Operations of Transport and Logistics Facilities', 'Humanitarian Logistics', 'GIS Applications in Supply Chain Management'],
            8 => ['Internship in Logistics and Supply Chain Management', 'Research Component in Logistics and Supply Chain Management'],
        ],
        'entry_requirements' => $alPasses,
    ],

    'bba' => [
        'semesters' => [
            1 => ['Principles of Management', 'Microeconomics', 'Business Mathematics', 'Financial Accounting', 'Information and Communication Technology', 'Business Communication', 'Interpersonal Skill Development'],
            2 => ['Marketing Management', 'Macroeconomics', 'Business Statistics', 'Business Law', 'Managerial Communication', 'Interpersonal Skill Development'],
            3 => ['Human Resource Management', 'Organizational Behavior', 'Operations Management', 'Management Accounting', 'E-Commerce & Digital Marketing', 'Interpersonal Skill Development'],
            4 => ['Creativity & Innovation', 'Project Management', 'Operational Research', 'Taxation', 'Entrepreneurship & Small Business', 'Interpersonal Skill Development'],
            5 => ['Logistics and Supply Chain Management', 'International Business', 'Financial Management', 'Managing Information', 'Research Methodology', 'Public Policy Analysis', 'Economics for Development'],
            6 => ['Auditing and Assurance', 'Financial Risk Management', 'Project Report', 'Strategic Management', 'Leadership and Corporate Culture', 'Industry Sociology and Psychology', 'Business Intelligence'],
        ],
        'entry_requirements' => $alPasses,
    ],

    'bbm-tourism-hospitality' => [
        'semesters' => [
            1 => ['Introduction to Tourism and Hospitality', 'Mathematics for Business', 'Principles of Management', 'Special Interest Tourism', 'Business English', 'Information Technology', 'Personal and Professional Development'],
            2 => ['Tourism Economics', 'Total Quality Management', 'Health and Safety for Tourism', 'Front Office Management', 'Accounting for Tourism', 'Business Communication'],
            3 => ['Human Resource Management', 'Management Accounting', 'Housekeeping and Accommodation Operations', 'Consumer Analysis', 'Food and Beverage Management I', 'Recreation Management'],
            4 => ['Food and Beverage Management II', 'Professional Cookery I', 'Tourism Entrepreneurship', 'International Tourism Marketing', 'Tourism Operations and Travel Management', 'Heritage Management'],
            5 => ['Project Management', 'Foreign Language I – Chinese Language', 'Foreign Language I – Korean Language', 'Professional Cookery II', 'Visitor Attraction Management', 'Event Management', 'Passenger Transport Operations', 'Tourism Destination Management'],
            6 => ['Green Tourism and Hospitality', 'Foreign Language II – Chinese Language', 'Foreign Language II – Korean Language', 'Business Development Project', 'Digital Tourism', 'Data Analysis and Presentation', 'Research Methodology'],
            7 => ['Strategic Management', 'Foreign Language III – Chinese Language', 'Foreign Language III – Korean Language', 'Tourism Planning and Development', 'Event Budgeting', 'Wellness Tourism', 'Spa Management', 'Restaurant Operations', 'MICE Tourism', 'Sports and Leisure Tourism Management', 'Legal Studies for Tourism'],
            8 => ['Industrial Training', 'Research Project / Dissertation'],
        ],
        'entry_requirements' => $alPasses,
    ],

    'bsc-business-management' => [
        'semesters' => [
            1 => ['Strategic Management', 'Intercultural Marketing Communication'],
            2 => ['International Business', 'Financial Management'],
            3 => ['Business Ethics', 'New Venture Creation'],
        ],
        'entry_requirements' => [
            'Successful completion of a BTEC Higher National Diploma (HND) in Business Management.',
            'Successful completion of an SQA Advanced Diploma (AD).',
            'Successful completion of a NIBM Higher Diploma (HD) in Business Management.',
            'Any other equivalent qualification recognized by the institution.',
        ],
    ],

    'bsc-accounting-finance' => [
        'semesters' => [
            1 => ['Strategic Management', 'Financial Management for Accounts'],
            2 => ['Financial Markets and Risk Management', 'Audit & Assurance'],
            3 => ['Taxation', 'Contemporary Accounting Issues'],
        ],
        'entry_requirements' => [
            'Successful completion of a BTEC Higher National Diploma (HND) in Accounting & Finance.',
            'Successful completion of an SQA Advanced Diploma (AD).',
            'Successful completion of a NIBM Higher Diploma (HD) in Accounting & Finance.',
            'Any other equivalent qualification recognized by the institution.',
        ],
    ],

    // The live pages show no course contents for the two HND courses,
    // so the page will display "Curriculum coming soon" until subjects are added.
    'hnd-business-management' => [
        'semesters' => [],
        'entry_requirements' => $hndEntry,
    ],

    'hnd-accounting-finance' => [
        'semesters' => [],
        'entry_requirements' => $hndEntry,
    ],

];