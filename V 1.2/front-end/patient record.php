<?php
include "../back-end/includes/navbar.php";
?>
 
 
          <!-- start table-cell -->
<section class="table-cell patient-personal">
    <div class="container">
        <div class="table__cell">
            <div class="table__cell__text">
    
            <h2>View Patient Record</h2>
    
    
            <div class="table__cell__text__plan table__cell__text__plan2">
                 <a href="index-doctor.php"><span>Home</span></a>
                <i class="fa-solid fa-chevron-right"></i>
                <span>Patient Record</span>
            </div> <!-- table__cell__text__plan -->
    
            </div> <!-- table__cell__img -->
        </div> <!-- table__cell -->
    
        
    </div> <!-- container -->
    
    
    
    </section> <!-- table-cell -->
    <!-- end table-cell -->
 

    <section class="appointment patient-record">
        <div class="container-fluid">
        <div class="row">
          
       
        <div class="col-12">
        <div class="appointment__teb">
        <?php
// الاتصال بقاعدة البيانات
require_once "../back-end/config/conn.php";

// استعلام لاستعراض بيانات المرضى
$sql = "SELECT id, name, email, phone FROM patient";
$result = mysqli_query($conn, $sql);

?>

<table class="table mt-5 text-center table-bordered table-striped">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Diagnosis</th>
        <th>Prescription</th>
    </thead>
    <tbody id="tBody">
        <?php
        // التحقق مما إذا كان هناك صفوف متاحة في النتيجة
        if (mysqli_num_rows($result) > 0) {
            // تكرار الصفوف ووضع البيانات في الجدول
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td><a href='didagnosis.php?id={$row['id']}' class='btn__app'>Add</a></td>";
                echo "<td><a href='Prescription.php?id={$row['id']}' class='btn__app'>Add</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>لا يوجد بيانات متاحة</td></tr>";
        }
        ?>
    </tbody>
</table>

<?php
// إغلاق اتصال قاعدة البيانات
mysqli_close($conn);
?>

        </div> <!-- appointment__teb -->
        </div> <!-- col-12 -->
        </div> <!-- row -->
        </div> <!-- container -->

        <div class="container">
          <div class="row">
        



          </div> <!-- row -->
      </div><!-- container -->
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
  
  
  