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
        'jobTitle' => 'Web Developer',
        'email' => 'anthonyb1@mymail.nku.edu',
        'phone' => '867-5309',
        'linkedin' => 'https://www.linkedin.com/in/brandonanthony/',
        'github' => 'https://github.com/brandonanthony',
        'website' => 'brandonanthony.com',
        'summary' => 'Aspiring Web Developer with a passion for creating intuitive and dynamic user experiences. Skilled in HTML, CSS, and JavaScript with a strong focus on front-end development.',
        'profileImage' => 'assets/brandon.jpg',
        'workExperience' => [
            [
                'position' => 'Junior Web Developer',
                'company' => 'Tech Startup',
                'duration' => '2022 - Present',
                'description' => 'Developed and maintained website features for multiple clients using HTML, CSS, and JavaScript...'
            ],
        ],
        'skills' => [
            'HTML/CSS' => 95,
            'JavaScript' => 90,
            'React' => 85,
            'PHP' => 80
        ],
        'education' => [
            [
                'degree' => 'BSc in Computer Science',
                'institution' => 'University of California',
                'year' => '2024'
            ]
        ],
        'interests' => ['Photography', 'Gaming']
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

$i = $_GET['index'];
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?= $team[$i]['firstname'] ?>'s Resume</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $team[$i]['firstname'] ?>'s profile">
    <meta name="author" content="<?= $team[$i]['firstname'] ?>">    
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
        <div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
        <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
            <header class="resume-header pt-4 pt-md-0">
                <div class="row">
                    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                        <img class="picture profile-image" src="<?= $team[$i]['profileImage'] ?>" alt="Profile Image">
                    </div>
                    <div class="col">
                        <div class="row p-4 justify-content-center justify-content-md-between">
                            <div class="primary-info col-auto">
                                <h1 class="name mt-0 mb-1 text-white text-uppercase"><?= $team[$i]['firstname'] . ' ' . $team[$i]['lastname'] ?></h1>
                                <div class="title mb-3"><?= $team[$i]['jobTitle'] ?></div>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a class="text-link" href="mailto:<?= $team[$i]['email'] ?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= $team[$i]['email'] ?></a></li>
                                    <li><a class="text-link" href="tel:<?= $team[$i]['phone'] ?>"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= $team[$i]['phone'] ?></a></li>
                                </ul>
                            </div>
                            <div class="secondary-info col-auto mt-2">
                                <ul class="resume-social list-unstyled">
                                    <li class="mb-3"><a class="text-link" href="<?= $team[$i]['linkedin'] ?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span>LinkedIn</a></li>
                                    <li class="mb-3"><a class="text-link" href="<?= $team[$i]['github'] ?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span>GitHub</a></li>
                                    <li><a class="text-link" href="<?= $team[$i]['website'] ?>"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span>Website</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="resume-body p-5">
                <!-- Summary Section -->
                <section class="resume-section summary-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
                    <div class="resume-section-content">
                        <p class="mb-0"><?= $team[$i]['summary'] ?></p>
                    </div>
                </section>

                <!-- Work Experience Section -->
                <section class="resume-section experience-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
                    <div class="resume-section-content">
                        <div class="resume-timeline position-relative">
                            <?php foreach ($team[$i]['workExperience'] as $experience): ?>
                                <article class="resume-timeline-item position-relative pb-5">
                                    <div class="resume-timeline-item-header mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <h3 class="resume-position-title font-weight-bold mb-1"><?= $experience['position'] ?></h3>
                                            <div class="resume-company-name ms-auto"><?= $experience['company'] ?></div>
                                        </div>
                                        <div class="resume-position-time"><?= $experience['duration'] ?></div>
                                    </div>
                                    <div class="resume-timeline-item-desc">
                                        <p><?= $experience['description'] ?></p>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>

                <!-- Skills Section -->
                <section class="resume-section skills-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
                    <div class="resume-section-content">
                        <div class="resume-skill-item">
                            <ul class="list-unstyled mb-4">
                                <?php foreach ($team[$i]['skills'] as $skill => $proficiency): ?>
                                    <li class="mb-2">
                                        <div class="resume-skill-name"><?= $skill ?></div>
                                        <div class="progress resume-progress">
                                            <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?= $proficiency ?>%" aria-valuenow="<?= $proficiency ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Education Section -->
                <section class="resume-section education-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Education</h2>
                    <div class="resume-section-content">
                        <ul class="list-unstyled">
                            <?php foreach ($team[$i]['education'] as $education): ?>
                                <li class="mb-2">
                                    <div class="resume-degree font-weight-bold"><?= $education['degree'] ?></div>
                                    <div class="resume-degree-org"><?= $education['institution'] ?></div>
                                    <div class="resume-degree-time"><?= $education['year'] ?></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </section>

                <!-- Interests Section -->
                <section class="resume-section interests-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
                    <div class="resume-section-content">
                        <ul class="list-unstyled">
                            <?php foreach ($team[$i]['interests'] as $interest): ?>
                                <li class="mb-1"><?= $interest ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </article> 
    <footer class="footer text-center pt-2 pb-5">
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>
</body>
</html>

