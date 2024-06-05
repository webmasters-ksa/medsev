<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medsev";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
} else {
    // echo "تم الاتصال بنجاح";
}
?>
