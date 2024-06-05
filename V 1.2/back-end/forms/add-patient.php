<?php
// استيراد ملف التكوين
require_once "../config/conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استخراج البيانات المرسلة من النموذج
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];

    // استخدم استعلام SQL لإدخال البيانات إلى قاعدة البيانات
    $sql = "INSERT INTO patient (name, email, password, phone, age) VALUES ('$name', '$email', '$password', '$phone', '$age')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../front-end/patient-info.php");
        exit;
            } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }

    // إغلاق الاتصال بقاعدة البيانات
    $conn->close();
}
?>
