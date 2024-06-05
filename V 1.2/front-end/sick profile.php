
<!-- start table-cell -->
<?php
include "../back-end/includes/navbar.php";

// التحقق مما إذا كان هناك قيمة مخزنة في $_SESSION
if(isset($_SESSION['user'])) {
    $patient_id = $_SESSION['user']['id'];

    // الاتصال بقاعدة البيانات
    require_once "../back-end/config/conn.php";

    // إعداد الاستعلام لاسترجاع البيانات
    $sql = "SELECT `name`, `email`, `phone`, `age` FROM `patient` WHERE `id` = '$patient_id'";
    $result = mysqli_query($conn, $sql);

    // التحقق مما إذا كان هناك نتائج للاستعلام
    if (mysqli_num_rows($result) > 0) {
        // استخراج البيانات
        $row = mysqli_fetch_array($result);

        // تخزين البيانات في متغيرات محلية
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $age = $row['age'];

        // عرض البيانات
        echo "<section class='table-cell table-cell2 doctor-padge'>";
        echo "<div class='container'>";
        echo "<div class='table__cell'>";
        echo "<div class='table__cell__text'>";
        echo "<h2>$name</h2>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</section>";

        echo "<section class='doctor-profile patient-profile sick-prof'>";
        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "<div class='col-lg-5'>";
        echo "<div class='doctorprofile'>";
        echo "<div class='doctorprofile__img'>";
        echo "<img src='images/Parsons students partner with Care + Wear to produce a dignified patient gown.jpg' alt=''>";
        echo "</div>";
        echo "<div class='doctorprofile__text'>";
        echo "<div class='doctorprofile__text__contact'>";
        echo "<h2>Contact info</h2>";
        echo "<ul class='d-flex flex-column'>";
        echo "<li> <i class='fa-solid fa-phone'></i> <span>Call : $phone</span> </li>";
        echo "<li> <i class='fa-solid fa-envelope'></i> <span>$email</span></li>";
        echo "<li>  <i class='fa-solid fa-location-dot'></i> <span>$age</span></li>";
        echo "</ul>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</section>";
    } else {
        echo "لا توجد بيانات متاحة";
    }
}
?>

            <div class="col-12">
                <div class="doctorinfo doctorinfo2">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="patient__profile__sensor d-flex flex-column text-center ">
                            <i class="icofont icofont-heart-beat-alt"></i>
                            <h3>30</h3>
                            <p>bpm Bulse Per Minute</p>
                          </div> <!-- patient__profile__sensor -->
                        </div> <!-- col-lg-6 -->
                        <div class="col-lg-6">
                          <div class="patient__profile__sensor d-flex flex-column text-center">
                            <i class="icofont icofont-sunny-day-temp"></i>
                            <h3>45</h3>
                            <p>temperature </p>
                          </div> <!-- patient__profile__sensor -->
                        </div> <!-- col-lg-6 -->


                        <div class="col-lg-6">
                          <div class="patient__profile__sensor d-flex flex-column text-center">
                            <i class="icofont icofont-prescription"></i>
                            <h3>35</h3>
                            <p>ecg</p>
                          </div> <!-- patient__profile__sensor -->
                        </div> <!-- col-lg-6 -->

                        <div class="col-lg-6">
                          <div class="patient__profile__sensor d-flex flex-column text-center">
                            <i class="icofont icofont-heart-beat-alt"></i>

                            <h3>32</h3>
                            <p>SpO2</p>
                          </div> <!-- patient__profile__sensor -->
                        </div> <!-- col-lg-6 -->
                      </div> <!-- container-fluid -->
                    </div> <!-- container-fluid -->
                </div> <!-- doctorinfo -->

            </div> <!-- col-lg-7 -->
        </div> <!-- row --> 
    </div> <!-- container -->
</section> <!-- doctor-profile -->
<!-- end doctor-profile -->








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
                   <p >
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
<div class="col-lg-3 col-sm-6">
                  <div class="footer__list">
                    <h2>Feedback</h2>
                    <form action="" class="footer__form">
                      <ul>
                        <li> 
                          <input type="text" name="textfooter" id="textfooter" placeholder="Name">
                        </li>
                        <li>
                          <input type="text" name="textnumber" id="textnumber" placeholder="Phone">
                        </li>
                        <li>
                          <textarea name="textarea" id="textarea" cols="20" rows="10" placeholder="Massage"></textarea>
                        </li>
                        <li>
                          <button type="submit" id="btn1">submit</button>
                        </li>
                      </ul>
                      
    
                    </form>
           
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
  