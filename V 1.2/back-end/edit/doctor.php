<?php
// تأكيد الاتصال بقاعدة البيانات
require_once "../config/conn.php";

// التحقق من إرسال الطلب عبر POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // التحقق من وجود معرف السجل المرسل
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        // استخراج معرف السجل
        $id = $_POST['id'];

        // التحقق من وجود وإعداد المتغيرات
        $name = isset($_POST['name']) ? trim($_POST['name']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
        $specialty = isset($_POST['specialty']) ? trim($_POST['specialty']) : '';
        $qualifications = isset($_POST['qualifications']) ? trim($_POST['qualifications']) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';
        $age = isset($_POST['age']) ? trim($_POST['age']) : '';

        // إعداد استعلام التحديث
        $sql = "UPDATE doctor SET Name=?, Email=?, Phone=?, Specialty=?, Qualifications=?, Password=?, Age=? WHERE id=?";

        if ($stmt = $conn->prepare($sql)) {
            // ربط المتغيرات مع البيانات
            $stmt->bind_param("sssssssi", $name, $email, $phone, $specialty, $qualifications, $password, $age, $id);

            // محاولة تنفيذ الاستعلام
            if ($stmt->execute()) {
                // إعادة التوجيه إلى صفحة النجاح (يمكنك تغيير الرابط)
                header("Location: ../../front-end/doctor-info.php");
                exit();
            } else {
                echo "حدث خطأ ما، يرجى المحاولة مرة أخرى.";
            }
        }

        // إغلاق الاستعلام
        $stmt->close();
    } else {
        echo "المعرف غير موجود.";
    }
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>
