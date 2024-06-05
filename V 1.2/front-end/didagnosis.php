


<?php
include "../back-end/includes/navbar.php";

if(isset($_GET['id'])) {
    $patient_id = $_GET['id'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استلام البيانات المرسلة من النموذج
    $date = $_POST['date'];
    $diagnosis = $_POST['diagnosis'];

    // الاتصال بقاعدة البيانات
    require_once "../back-end/config/conn.php";


    // إنشاء استعلام SQL لإدراج البيانات في جدول diagnosis
    $sql = "INSERT INTO diagnosis (patient_id, Date, Diagnosis) VALUES ('$patient_id', '$date', '$diagnosis')";

    if (mysqli_query($conn, $sql)) {
        header("location: patient record.php");
    } else {
        echo "خطأ في إضافة التشخيص: " . mysqli_error($conn);
    }

    // إغلاق الاتصال بقاعدة البيانات
    mysqli_close($conn);
}
?>

<div class="col-lg-6">
    <div class="doctor__apps d-flex justify-content-center">
        <div class="doctor__app doctor__app__pe my-3">
            <h2>Make a Diagnosis</h2>
            <div class="row">
                <div class="meet__doctor__search">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $patient_id; ?>" method="post" class="meet__doctor__search__meet patient-record__inp">
                        <label for="nameTreatment2">Date Of Examination</label>
                        <input type="text" id="nameTreatment2" name="date" placeholder="Enter the date">
                        <label for="nameapp">Diagnosis</label>
                        <textarea name="diagnosis" id="textarea" cols="20" rows="10" placeholder="Write a Diagnosis here"></textarea>
                        <button class="btn__app" type="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>


                      <!-- ///////////////////  js /////////////////////// -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
  
  </body>
  </html>
  
  