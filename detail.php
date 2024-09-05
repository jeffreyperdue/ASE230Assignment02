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
        'profileImage' => 'assets/jeff.jpg'
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
        'profileImage' => 'assets/brandon.jpg'
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
        'profileImage' => 'assets/nick.jpg'
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
                                    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?= $team[$i]['email'] ?></a></li>
                                    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?= $team[$i]['phone'] ?></a></li>
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
                <section class="resume-section summary-section mb-5">
                    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Summary</h2>
                    <div class="resume-section-content">
                        <p class="mb-0"><?= $team[$i]['summary'] ?></p>
                    </div>
                </section>
                <!-- Additional sections like Work Experience, Skills, etc., can be added here -->
            </div>
        </div>
    </article> 
    <footer class="footer text-center pt-2 pb-5">
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>
</body>
</html>
