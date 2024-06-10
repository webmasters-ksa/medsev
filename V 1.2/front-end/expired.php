<?php
session_start();

// تعيين وقت بداية المؤقت إذا لم يتم تعيينه بعد
if (!isset($_SESSION['start_time'])) {
    $_SESSION['start_time'] = time(); // تعيين وقت بداية المؤقت
}

// تحديث وقت بداية المؤقت كل 30 دقيقة
if (time() - $_SESSION['start_time'] >= 1800) { // 1800 ثواني = 30 دقيقة
    unset($_SESSION['start_time']); // إزالة وقت بداية المؤقت
    header("Location: expired.php"); // إعادة التوجيه إلى الصفحة المنتهية
    exit;
}
?>
