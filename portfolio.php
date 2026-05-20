<?php session_start();?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width"/>
        <title>index</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="portfolio.css"/>
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
                    <li class="navOption"><a href="education.php">Education</a></li>
                    <li class="navOption" id="portfolio"><a href="portfolio.php">Portfolio</a></li>
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
        <h1 id="title">MY PROJECTS & WORK</h1>
        <div id="project1">
            <h1>Apple Garage Management System</h1>
            <p> For my A-Level NEA project, 
                I developed a comprehensive full-stack web application 
                designed to modernize and enhance 
                the operational efficiency of an automotive repair garage.         
            </p>
            <div>
                <span>Python</span>
                <span>Flask framework</span>
                <span>SQLite</span>
                <span>HTML</span>
                <span>CSS</span>
            </div>
            <div>
                <a href="downloads\alevel NEA.zip" download>Download Project File</a>
            </div>
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