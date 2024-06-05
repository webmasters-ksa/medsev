<?php
require_once "../config/conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استلام البيانات من الفورم
    $firstName = $_POST['text'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $password = $_POST['password--singup'];

    // تنفيذ الاستعلام لإدخال البيانات إلى جدول المرضى
    $sql = "INSERT INTO patient (name, email, password, phone, age) VALUES (?, ?, ?, ?, ?)";
    if ($stmt = $conn->prepare($sql)) {
        // ربط البارامترات
        $stmt->bind_param("sssss", $firstName, $email, $password, $phoneNumber, $age);
        
        // تنفيذ الاستعلام
        if ($stmt->execute()) {
            // توجيه المستخدم إلى صفحة بعد التسجيل
            header("Location: ../../front-end/login.php");
            exit();
        } else {
            echo "حدث خطأ أثناء تنفيذ الاستعلام.";
        }
    }
    // إغلاق الاستعلام
    $stmt->close();
    // إغلاق الاتصال بقاعدة البيانات
    $conn->close();
}
?>
