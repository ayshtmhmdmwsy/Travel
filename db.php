<?php
$host = "127.0.0.1";
$user = "root";
$pass = "root";
$dbname = "sudan_tourism";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// Set Arabic Charset
$conn->set_charset("utf8mb4");
?>
