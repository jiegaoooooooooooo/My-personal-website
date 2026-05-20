<?php session_start();?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width"/>
        <title>index</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="index.css"/>
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
                    <li class="navOption" id="home"><a href="index.php">Home</a></li>
                    <li class="navOption"><a href="education.php">Education</a></li>
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
        <article id="a1">
            <aside>
                <h1>Hi! I'm Jiegao Chen,</h1>
                <h1>a Computer Science Student.</h1>
                <p>A computer science student studying at Queen Mary University of London.</p>
                <a href="portfolio.php">VIEW MY WORK</a>
            </aside>
            <img src="images\myself.jpg" alt=""/>
        </article>
        <div id="d1" class="card">
            <a href="education.php">
                <img src="images/education.png" alt="Education Icon"/>
                <h1>EDUCATION</h1>
                <p>My academic journey and qualifications.</p>
            </a>
        </div>
        <div id="d2" class="card">
            <a href="portfolio.php">
                <img src="images/portfolio.png" alt="Portfolio Icon"/>
                <h1>PORTFOLIO</h1>
                <p>Links to my latest projects and contributions.</p>
            </a>
        </div>
        <div id="d3" class="card">
            <a href="skills.php">
                <img src="images/skills.svg" alt="Skills Icon"/>
                <h1>SKILLS</h1>
                <p>My skills and achievements.</p>
            </a>
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