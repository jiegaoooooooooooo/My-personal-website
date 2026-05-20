<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="viewBlog.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400&family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <title>Document</title>
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
                <li class="navOption"><a href="skills.php">Skills</a></li>
                <li class="navOption" id="viewBlog"><a href="viewBlog.php">View Blog</a></li>
                <?php if (isset($_SESSION['UserID'])) { ?>
                    <li class="navOption"><a href="addEntry.php">Add Blog</a></li>
                    <li class="navOption"><a href="logout.php">Logout</a></li>
                <?php } else { ?>
                    <li class="navOption"><a href="login.php">Login</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <h1 id="title">BLOG</h1>
    <section id="archive-filter">
        <form method="GET" action="viewBlog.php">
            <select name="month" id="month-select" onchange="this.form.submit()">
                <option value="">Select Months</option>
                <option value="">All Months</option>
                <?php
                $conn = new mysqli("127.0.0.1", "root", "", "phase2");
                $month_sql = "SELECT DISTINCT MONTH(date) as m, YEAR(date) as y FROM blogposts ORDER BY y DESC, m DESC";
                $month_res = $conn->query($month_sql);
                while($m_row = $month_res->fetch_assoc()) {
                    $dateObj = DateTime::createFromFormat('!m', $m_row['m']);
                    $monthName = $dateObj->format('F');
                    $val = $m_row['y'] . "-" . $m_row['m'];
                    echo "<option value='$val'>$monthName {$m_row['y']}</option>";
                }
                ?>
            </select>
        </form>
    </section>
    <div id="blog">
        <?php 
            $filter_query = "";
            if (!empty($_GET['month'])) {
                $parts = explode('-', $_GET['month']);
                $year = $parts[0];
                $month = $parts[1];
                $filter_query = " WHERE MONTH(date) = '$month' AND YEAR(date) = '$year'";
            }

            $sql = "SELECT * FROM blogposts" . $filter_query;
            $result = $conn->query($sql);

            $posts = [];
            if ($result && $result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $posts[] = $row;
                }
            }

            $n = count($posts);
            for ($i = 0; $i < $n - 1; $i++) {
                $max_idx = $i;
                for ($j = $i + 1; $j < $n; $j++) {
                    $current_post_time = strtotime($posts[$j]['date'] . ' ' . $posts[$j]['time']);
                    $max_post_time = strtotime($posts[$max_idx]['date'] . ' ' . $posts[$max_idx]['time']);
                    if ($current_post_time > $max_post_time) { $max_idx = $j; }
                }
                $temp = $posts[$max_idx];
                $posts[$max_idx] = $posts[$i];
                $posts[$i] = $temp;
            }

            foreach ($posts as $post) {
                $formattedDate = date("jS F Y, G:i \U\T\C", strtotime($post['date'] . ' ' . $post['time']));
                ?>
                <div class="blog-entry">
                    <p class="blog-date"><?php echo $formattedDate; ?></p> 
                    <h2 class="blog-title"><?php echo $post['title']; ?></h2> 
                    <p class="blog-content"><?php echo $post['content']; ?></p> 
                </div>
            <?php
            }
            $conn->close();
        ?>
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