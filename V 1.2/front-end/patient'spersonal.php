<?php
include "../back-end/includes/navbar.php";

// التحقق مما إذا كانت هناك قيمة مخزنة في $_SESSION
if(isset($_SESSION['user'])) {
    $patient_id = $_SESSION['user']['id'];

    // الاتصال بقاعدة البيانات
    require_once "../back-end/config/conn.php";

    // إعداد الاستعلام لاسترجاع البيانات
    $sql = "SELECT `Medicine` FROM `prescription` WHERE `patient_id` = '$patient_id'";
    $result = mysqli_query($conn, $sql);

    // التحقق مما إذا كان هناك نتائج للاستعلام
    if (mysqli_num_rows($result) > 0) {
        // عرض البيانات
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='meet__doctor__search'>";
            echo "<div class='meet__doctor__search__icon'>";
            echo "<i class='icofont icofont-prescription'></i>";
            echo "</div>";
            echo "<div class='meet__doctor__search__meet'>";
            echo "<p> Medicine :" . $row['Medicine'] . "</p>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "لا توجد بيانات متاحة";
    }
}
?>
