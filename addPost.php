<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "phase2";
// Creates connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Checks connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $title = $_POST['title'];
    $content = $_POST['content'];
    date_default_timezone_set('UTC');
    $date = date("Y-m-d");
    $time = date("H:i:s");

    $sql = "INSERT INTO blogposts (title, content, date, time)
            VALUES ('$title', '$content', '$date', '$time')";
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("Location: viewBlog.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>