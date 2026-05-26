<?php
include 'security.php';

$username = $_SESSION['username'];

echo "welcome, ".$username;
?>
<br>
<a href="courses/index.php">courses</a>
<br>
<a href="logout.php">logout</a>