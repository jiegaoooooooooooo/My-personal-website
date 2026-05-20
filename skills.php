<?php session_start();?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width"/>
        <title>index</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="skills.css"/>
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
                    <li class="navOption"><a href="portfolio.php">Portfolio</a></li>
                    <li class="navOption" id="skills"><a href="skills.php">Skills</a></li>
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
        <h1 id="title">MY TECHNICAL SKILLS</h1>
        <div id="d1">
            <h1>Front-End Technologies</h1>
            <article>
                <aside>HTML — HyperText Markup Language</aside>
                <img src="images\HTML5.png" alt=""/>
            </article>
            <article>
                <aside>CSS — Cascading Style Sheets</aside>
                <img src="images\css.png" alt=""/>
            </article>
            <article>
                <aside>JavaScript — JS</aside>
                <img src="images\js.webp" alt=""/>
            </article>
        </div>
        <div id="d2">
            <h1>Back-End Technologies</h1>
            <article>
                <aside>Python</aside>
                <img src="images\python.png" alt=""/>
            </article>
            <article>
                <aside>Java</aside>
                <img src="images\java.png" alt=""/>
            </article>
            <article>
                <aside>SQL - Relational Database</aside>
                <img src="images\sql.png" alt=""/>
            </article>
        </div>
        <div id="d3">
            <h1>Other Essential Skills</h1>
            <article>
                <aside>GitHub - Git</aside>
                <img src="images\github.png" alt=""/>
            </article>
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