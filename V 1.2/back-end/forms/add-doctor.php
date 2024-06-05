<?php
require_once "../config/conn2.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $specialty = $_POST['specialty'];
    $qualifications = $_POST['qualifications'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    // معالجة تحميل الصورة
    $target_dir = "../upload/";
    $target_file =  basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // التحقق من نوع الملف
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "الملف ليس صورة.";
        $uploadOk = 0;
    }

    // التحقق من حجم الملف
    if ($_FILES["image"]["size"] > 500000) {
        echo "عذرًا، حجم الملف كبير جدًا.";
        $uploadOk = 0;
    }

    // السماح بأنواع ملفات معينة فقط
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "عذرًا، فقط ملفات JPG و JPEG و PNG و GIF مسموح بها.";
        $uploadOk = 0;
    }

    // التحقق من uploadOk
    if ($uploadOk == 0) {
        echo "عذرًا، لم يتم تحميل الملف.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "تم تحميل الملف ". basename($_FILES["image"]["name"]). " بنجاح.";
        } else {
            echo "عذرًا، حدث خطأ أثناء تحميل الملف.";
        }
    }

    // استعلام إدخال البيانات في قاعدة البيانات
    $sql = "INSERT INTO doctor (Name, Email, Phone, Specialty, Qualifications, Age, password, image_path)
            VALUES (:name, :email, :phone, :specialty, :qualifications, :age, :password, :image_path)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':specialty', $specialty);
    $stmt->bindParam(':qualifications', $qualifications);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':image_path', $target_file);

    try {
        $stmt->execute();
        header("Location: ../../front-end/doctor-info.php");
    } catch(PDOException $e) {
        echo "خطأ: " . $e->getMessage();
    }
}
?>
