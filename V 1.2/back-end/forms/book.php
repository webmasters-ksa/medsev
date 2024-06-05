<?php
// بدء الجلسة
session_start();

// التحقق مما إذا كان المستخدم مسجل الدخول
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// اتصال بقاعدة البيانات
require_once "../config/conn.php";

// استقبال بيانات النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $time = $_POST['time'];
    $doctor_id = $_GET['doctor_id'];
    $patient_id = $_SESSION['user']['id'];

    // إدخال البيانات في قاعدة البيانات
    $sql = "INSERT INTO times (doctoe_id, patient_id, time) VALUES (?, ?, ?)";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("iis", $doctor_id, $patient_id, $time);
        if ($stmt->execute()) {
            echo "<script>alert('Appointment booked successfully!'); window.location.href='../../front-end/index.php';</script>";
        } else {
            echo "<script>alert('Error booking appointment. Please try again.'); window.location.href='book_appointment.php?doctor_id=$doctor_id';</script>";
        }
    } else {
        echo "<script>alert('Database error. Please try again.'); window.location.href='book_appointment.php?doctor_id=$doctor_id';</script>";
    }
}
?>
