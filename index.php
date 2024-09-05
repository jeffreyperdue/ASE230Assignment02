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
            <?php for($i = 0; $i < count($team); $i++): ?>
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
            <?php endfor; ?>
        </div>
    </article> 
    <footer class="footer text-center pt-2 pb-5">
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Brandon, Jeff, & Nick</small>
    </footer>
</body>
</html>
