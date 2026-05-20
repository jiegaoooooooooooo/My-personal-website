<?php session_start();?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width"/>
        <title>index</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="education.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&family=Montserrat:wght@800&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Jiegao Chen</h1>
            <?php if (isset($_SESSION['UserID'])) { ?>
                <h1>Admin Active</h1>
            <?php } ?>
            
            <nav role="navigation">
                <ul>
                    <li class="navOption"><a href="index.php">Home</a></li>
                    <li class="navOption" id="education"><a href="education.php">Education</a></li>
                    <li class="navOption"><a href="portfolio.php">Portfolio</a></li>
                    <li class="navOption"><a href="skills.php">Skills</a></li>
                    <li class="navOption"><a href="viewBlog.php">View Blog</a></li>
                    <?php if (isset($_SESSION['UserID'])) { ?>
                        <li class="navOption"><a href="addEntry.php">Add Blog</a></li>
                        <li class="navOption"><a href="logout.php">Logout</a></li>
                    <?php } else { ?>
                        <li class="navOption"><a href="login.php">Login</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </header>
        <h1 id="title">MY EDUCATIONAL JOURNEY</h1>
        <div class="journey">
            <img src="images\QMUL.jpg" alt="">
            <h1>BSc Computer Science and Artificial Intelligence</h1>
            <p>Queen Mary University of London (2025 – 2029)</p>
            <ul>
                <li>Current Focus: Building a foundation in computational thinking 
                    and computer programming.
                </li>
                <li>Key Courses: Object Oriented Programming, 
                    Fundamentals of Web Technology, 
                    Automata and Formal Languages.
                </li>
            </ul>
        </div>
        <div class="certifications">
            <h1>Certifications</h1>
            <span>QMUL Information Literacy</span>
        </div>
        <footer>
            &copy; 2026 Jiegao Chen.
            <ul>
                <li>
                    <a href="https://www.instagram.com/acjg666/" target="_blank">
                        <img src="images\Instagram_icon.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/chen-jiegao-a01a01395/" target="_blank">
                        <img src="images\LinkedIn_icon.png" alt="">
                    </a>
                </li>                
            </ul>
        </footer>       
    </body>
</html>