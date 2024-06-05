<?php
// تأكيد الاتصال بقاعدة البيانات
require_once "../config/conn.php";

// التحقق من وجود معرف ممرر عبر الرابط
if(isset($_GET['id']) && !empty($_GET['id'])){
    // استخراج معرف السجل
    $id = $_GET['id'];

    // استعداد الاستعلام لحذف السجل
    $sql = "DELETE FROM doctor WHERE id = ?";

    if($stmt = $conn->prepare($sql)){
        // ربط المتغيرات مع البيانات
        $stmt->bind_param("i", $id);

        // محاولة تنفيذ الاستعلام
        if($stmt->execute()){
            // إعادة التوجيه إلى الصفحة الرئيسية بعد حذف السجل بنجاح
            header("location: ../../front-end/doctor-info.php");
            exit();
        } else{
            echo "حدث خطأ ما، يرجى المحاولة مرة أخرى.";
        }
    }

    // إغلاق الاستعلام
    $stmt->close();

    // إغلاق الاتصال بقاعدة البيانات
    $conn->close();
} else{
    // إعادة التوجيه إلى الصفحة الرئيسية إذا لم يتم تمرير معرف السجل
    header("location: ../../front-end/doctor-info.php");
    exit();
}
?>
