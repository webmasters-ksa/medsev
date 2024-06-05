<?php
include "../back-end/includes/navbar.php";
// الاتصال بقاعدة البيانات
require_once "../back-end/config/conn.php";


// التحقق مما إذا كانت هناك قيمة مخزنة في $_SESSION
if(isset($_SESSION['user'])) {
  $id = $_SESSION['user']['id'];
}


// إنشاء استعلام SQL لاسترجاع تشخيص المريض
$sql = "SELECT `Date`, `Diagnosis` FROM `diagnosis` WHERE `patient_id` = '$id'";
$result = mysqli_query($conn, $sql);

?>


<!-- بدء الجدول -->
<table class="table mt-5 text-center table-bordered table-striped">
    <thead>
        <tr>
            <th>Date</th>
            <th>Diagnosis</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // التحقق مما إذا كان هناك بيانات متاحة لعرضها
        if (mysqli_num_rows($result) > 0) {
            // عرض البيانات في الجدول
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['Date'] . "</td>";
                echo "<td>" . $row['Diagnosis'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No diagnosis found.</td></tr>";
        }
        ?>
    </tbody>
</table>
<!-- نهاية الجدول -->

<?php
// إغلاق الاتصال بقاعدة البيانات
mysqli_close($conn);
?>

<!-- ///////////////////  js /////////////////////// -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
