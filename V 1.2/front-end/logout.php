<?php
// بدء الجلسة
session_start();

// إنهاء جميع بيانات الجلسة
$_SESSION = array();

// إذا كنت تريد تدمير الجلسة تمامًا، قم بإلغاء تعليق السطر التالي
session_destroy();

// إعادة توجيه المستخدم إلى صفحة تسجيل الدخول
header("Location: login.php");
exit();
?>
