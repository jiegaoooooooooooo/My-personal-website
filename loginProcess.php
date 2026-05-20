<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginProcess</title>
</head>
<body>
    <?php
        session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "phase2";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $searchEmail = $_POST['email'];
            $inputPassword = $_POST['password'];
            $sql = "SELECT password FROM users WHERE email = '$searchEmail'";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                $user = $result->fetch_assoc();

                if($user['password'] === $inputPassword){
                    $_SESSION['UserID'] = 1;
                    $conn->close();
                    header("Location: addEntry.php");
                    exit();
                } else {
                    $conn->close();
                    header("Location: login.php?error=invalid");
                }
            } else {
                $conn->close();
                header("Location: login.php?error=invalid");
            }
            $conn->close();
        }
    ?>
</body>
</html>