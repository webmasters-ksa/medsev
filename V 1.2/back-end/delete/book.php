<?php
// تحديد جلسة
session_start();


require_once "../config/conn.php";


// إذا تم تقديم نموذج الحذف
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['appointment_id'])) {
    // استخراج معرف الحجز المراد حذفه
    $delete_id = $_POST['appointment_id'];

    // إنشاء استعلام لحذف الحجز من قاعدة البيانات
    $sql = "DELETE FROM times WHERE id = $delete_id";

    // تنفيذ الاستعلام
    if (mysqli_query($conn, $sql)) {
        header("location: ../../front-end/appointment.php");
        exit();
    } else {
        echo "حدث خطأ أثناء محاولة حذف الحجز: " . mysqli_error($conn);
    }
}

// إغلاق الاتصال بقاعدة البيانات
mysqli_close($conn);
?>
