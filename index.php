<?php
$team = [
    [
        'firstname' => 'Jeffrey',
        'lastname' => 'Perdue',
        'jobTitle' => 'Software Engineer',
        'email' => 'jeffrey.perdue@gmail.com',
        'phone' => '513 462 6478',
        'linkedin' => 'https://www.linkedin.com/in/jeffperdue/',
        'github' => 'https://github.com/jeffreyperdue',
        'website' => 'jeffperdue.com',
        'summary' => 'Software Engineering student with a 3.9 GPA at Northern Kentucky University, on track to graduate in May 2026. I thrive at the intersection of teamwork and innovation, with demonstrated leadership and collaborative problem-solving skills. Seeking an internship and/or full-time employment.',
        'profileImage' => 'assets/jeff.jpg',
        'workExperience' => [
            [
                'position' => 'Front End Supervisor/Forklift Driver',
                'company' => 'Costco Wholesale',
                'duration' => '2020 - Present',
                'description' => 'Supervised staff of 60+ including assisting in hiring, writing performance reviews, and constructing training and development plans for staff...'
            ],
            [
                'position' => 'Wine Director/Sommelier',
                'company' => 'Jean-Robert\'s Table',
                'duration' => '2015 - 2019',
                'description' => 'Managed 150+ bottle wine cellar, including inventory, staff training and pairing for tasting menus...'
            ],
        ],
        'skills' => [
            'Java' => 100,
            'React' => 94,
            'JavaScript' => 96,
            'Node.js' => 92,
            'HTML/CSS' => 96
        ],
        'education' => [
            [
                'degree' => 'BS in Applied Software Engineering',
                'institution' => 'Northern Kentucky University',
                'year' => '2026'
            ]
        ],
        'interests' => ['Hiking', 'Cooking']
    ],
    [
        'firstname' => 'Brandon',
        'lastname' => 'Anthony',
        'jobTitle' => 'Help Desk Tier 1',
        'email' => 'anthonyb1@mymail.nku.edu',
        'phone' => '513 504 1877',
        'linkedin' => 'https://www.linkedin.com/in/brandon-j-anthony/',
        'github' => 'https://github.com/anthonyb1nku',
        'website' => 'brandonanthony.com',
        'summary' => 'Current Cybersecurity and Applied Software Engineering student at Northern Kentucky University with a strong attention to detail and great organizational skills seeking an internship in the Greater Cincinnati area. Able to work in-person, remote, or hybrid in the Cincinnati tri-state area.',
        'profileImage' => 'assets/brandon.jpg',
        'workExperience' => [
            [
                'position' => 'IT Intern',
                'company' => 'Fischer Homes',
                'duration' => '2024 - Present',
                'description' => 'Configure employee accounts using Active Directory and Miscrosoft 365.'
            ],
            [
                'position' => 'Air & Missile Defense Vehicle Commander',
                'company' => 'US Army',
                'duration' => '2018-2023',
                'description' => 'Tested and integrated the new M-SHORAD Stryker into US ARMY operation.'
            ],
        ],
        'skills' => [
            'HTML/CSS' => 95,
            'Java' => 92,
            'Python' => 85,
            'PHP' => 87,
        ],
        'education' => [
            [
                'degree' => 'BS in CyberSecurity, Applied Software Engineering',
                'institution' => 'Northern Kentucky University',
                'year' => '2027'
            ]
        ],
        'interests' => ['Hiking', 'Soccer']
    ],
    [
        'firstname' => 'Nick',
        'lastname' => 'Miller',
        'jobTitle' => 'Data Analyst',
        'email' => 'millern@mymail.nku.edu',
        'phone' => '555-5555',
        'linkedin' => 'https://www.linkedin.com/in/nickmiller/',
        'github' => 'https://github.com/nickmiller',
        'website' => 'nickmiller.com',
        'summary' => 'Data Analyst with a knack for uncovering patterns and insights from complex data sets. Experienced in Python, SQL, and data visualization tools. Looking for opportunities to leverage data for strategic decision-making.',
        'profileImage' => 'assets/nick.jpg',
        'workExperience' => [
            [
                'position' => 'Data Analyst',
                'company' => 'Finance Corp',
                'duration' => '2021 - Present',
                'description' => 'Analyzed large datasets to provide actionable insights, creating data visualizations and reports for the executive team...'
            ],
        ],
        'skills' => [
            'Python' => 98,
            'SQL' => 95,
            'Excel' => 90,
            'R' => 85
        ],
        'education' => [
            [
                'degree' => 'MS in Data Science',
                'institution' => 'MIT',
                'year' => '2022'
            ]
        ],
        'interests' => ['Cycling', 'Chess']
    ]
];
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Our Amazing Team</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Team members overview">
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">
	<style>
    .profile-image {
        max-width: 150px; 
        max-height: 150px; 
        width: auto; 
        height: auto; 
    }
	</style>
</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
        <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
            <h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
            <?php for($i = 0; $i < count($team); $i++){ ?>
                <?php
                    $name = $team[$i]['firstname'] . ' ' . $team[$i]['lastname'];
                    $jobTitle = $team[$i]['jobTitle'];
                    $profileImage = $team[$i]['profileImage'];
                ?>
                <header class="resume-header pt-4 pt-md-0">
                    <div class="row">
                        <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
						<img class="picture profile-image" src="<?= $profileImage ?>" alt="Profile Image">
                        </div>
                        <div class="col">
                            <div class="row p-4 justify-content-center justify-content-md-between">
                                <div class="primary-info col-auto">
                                    <h1 class="name mt-0 mb-1 text-white text-uppercase"><?= $name ?></h1>
                                    <div class="title mb-3"><?= $jobTitle ?></div>
                                    <a href="detail.php?index=<?= $i ?>" class="btn btn-secondary">See full profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            <?php } ?>
        </div>
    </article> 
    <footer class="footer text-center pt-2 pb-5">
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Brandon, Jeff, & Nick</small>
    </footer>
</body>
</html>
