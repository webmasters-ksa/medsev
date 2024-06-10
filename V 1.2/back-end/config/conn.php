<?php

$servername = "localhost";
$username = "quiczwaq_extra";
$password = "quiczwaq_extra";
$dbname = "quiczwaq_extra";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
} else {
    // echo "تم الاتصال بنجاح";
}
?>
