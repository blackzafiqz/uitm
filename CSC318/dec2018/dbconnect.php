<?php
$servername = "blackzafiqz.com";
$username = "abc";
$password = "abc123";
$db = "db123";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
?>
