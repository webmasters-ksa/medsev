<?php
// تأكيد الاتصال بقاعدة البيانات
require_once "../config/conn.php";

// التحقق من تلقي البيانات من النموذج
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // تخزين القيم المحدثة من النموذج
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $age = $_POST["age"];
    
    // استعداد الاستعلام لتحديث البيانات
    $sql = "UPDATE patient SET name=?, email=?, phone=?, password=?, age=? WHERE id=?";
    
    if($stmt = $conn->prepare($sql)){
        // ربط المتغيرات مع البيانات
        $stmt->bind_param("sssssi", $name, $email, $phone, $password, $age, $id);
        
        // محاولة تنفيذ الاستعلام
        if($stmt->execute()){
            header("Location: ../../front-end/patient-info.php");
        } else{
            echo "حدث خطأ ما، يرجى المحاولة مرة أخرى.";
        }
    }
    
    // إغلاق الاستعلام
    $stmt->close();
} else{
    // إذا لم يتم تلقي بيانات من النموذج
    header("Location: ../../front-end/patient-info.php");
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>
