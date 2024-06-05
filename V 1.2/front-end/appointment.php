<?php
include "../back-end/includes/navbar.php";
$doctor_id = $_SESSION['user']['id'];

// الاتصال بقاعدة البيانات
require_once "../back-end/config/conn.php";


// جلب المواعيد بناءً على `doctor_id`
$appointments_sql = "SELECT `id`, `doctoe_id`, `patient_id`, `time` FROM `times` WHERE `doctoe_id` = ?";
$stmt = $conn->prepare($appointments_sql);
$stmt->bind_param("i", $doctor_id);
$stmt->execute();
$appointments_result = $stmt->get_result();

?>

<!-- start table-cell -->
<section class="table-cell patient-personal">
    <div class="container">
        <div class="table__cell">
            <div class="table__cell__text">
                <h2>View Appointment</h2>
                <div class="table__cell__text__plan table__cell__text__plan2">
                    <a href="index-doctor.php"><span>Home</span></a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <span>Appointment</span>
                </div> <!-- table__cell__text__plan -->
            </div> <!-- table__cell__img -->
        </div> <!-- table__cell -->
    </div> <!-- container -->
</section> <!-- table-cell -->
<!-- end table-cell -->

<section class="appointment">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="appointment__teb">
                    <table class="table mt-5 text-center table-bordered table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Age</th>
                            <th>Time</th>
                            <th>Delete</th>
                        </thead>
                        <tbody id="tBody">
                            <?php
                            if ($appointments_result->num_rows > 0) {
                                while($appointment = $appointments_result->fetch_assoc()) {
                                    $patient_id = $appointment['patient_id'];
                                    $patient_sql = "SELECT `id`, `name`, `email`, `phone`, `age` FROM `patient` WHERE `id` = ?";
                                    $patient_stmt = $conn->prepare($patient_sql);
                                    $patient_stmt->bind_param("i", $patient_id);
                                    $patient_stmt->execute();
                                    $patient_result = $patient_stmt->get_result();
                                    if ($patient_result->num_rows > 0) {
                                        $patient = $patient_result->fetch_assoc();
                                        echo "<tr>
                                                <td>{$appointment['id']}</td>
                                                <td>{$patient['name']}</td>
                                                <td>{$patient['email']}</td>
                                                <td>{$patient['phone']}</td>
                                                <td>{$patient['age']}</td>
                                                <td>{$appointment['time']}</td>
                                                <td class='patient__profile__btn d-block'>
                                                    <form method='POST' action='../back-end/delete/book.php'>
                                                        <input type='hidden' name='appointment_id' value='{$appointment['id']}'>
                                                        <button class='btn__app btn__app__one' type='submit'>Cancel</button>
                                                    </form>
                                                </td>
                                            </tr>";
                                    }
                                }
                            } else {
                                echo "<tr><td colspan='7'>No appointments found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div> <!-- appointment__teb -->
            </div> <!-- col-12 -->
        </div> <!-- row -->
    </div> <!-- container -->
</section> <!-- appointment -->

<!-- start footer -->
<footer class="footerbig">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="footer__list">
                        <h2>Contact Us</h2>
                        <ul>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <p>
                                    <a href="#">info@medisev.com</a>
                                    <a href="#">hello@medisev.com</a>
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-mobile-screen"></i>
                                <p>
                                    <a href="#">Call: +07 554 332 322</a>
                                    <a href="#">Call: +236 256 256 365</a>
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <p>
                                    15 6'october, Hosary Street,
                                    <br> cairo egypt
                                </p>
                            </li>
                        </ul>
                    </div> <!-- footer__list -->
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="footer__list">
                        <h2>Quick Links </h2>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Our Expertise</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Doctors</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div> <!-- footer__list -->
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer__list">
                        <h2>Our Services</h2>
                        <ul>
                            <li><a href="#">Dental Care</a></li>
                            <li><a href="#">Cardiology</a></li>
                            <li><a href="#">Hijama Therapye</a></li>
                            <li><a href="#">Massage Therapy</a></li>
                            <li><a href="#">Ambluance Sevices</a></li>
                            <li><a href="#">Medicine</a></li>
                        </ul>
                    </div> <!-- footer__list -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer -->
</footer> <!-- footer -->
<!-- end footer -->

<!-- ///////////////////  js /////////////////////// -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

<?php
$conn->close();
?>
