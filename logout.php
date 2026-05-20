<?php
session_start();
$_SESSION['UserID'] = null;
session_destroy();
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>