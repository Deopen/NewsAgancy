<?php

$conn = new mysqli("localhost", "root", "","testcase1");
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

//echo "connect successful"

?>