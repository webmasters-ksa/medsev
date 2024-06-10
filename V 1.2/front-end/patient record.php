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

                // استعلام قاعدة البيانات لاسترجاع البيانات
                $sql = "SELECT `id`, `name`, `email`, `phone` FROM `patient`";
                $result = $conn->query($sql);

                // إنشاء الجدول الديناميكي
                if ($result->num_rows > 0) {
                    echo "<table class='table mt-5 text-center table-bordered table-striped'>
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Diagnosis</th>
                                <th>Prescription</th>
                            </thead>
                            <tbody>";
                    // عرض البيانات في الجدول
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["name"] . "</td>
                                <td>" . $row["email"] . "</td>
                                <td>" . $row["phone"] . "</td>
                                <td><a href='didagnosis.php?id=" . $row["id"] . "' class='btn__app'>Add</a></td>
                                <td><a href='Prescription.php?id=" . $row["id"] . "' class='btn__app'>Add</a></td>
                            </tr>";
                    }
                    echo "</tbody></table>";
                } else {
                    echo "لا توجد بيانات.";
                }
                ?>
            </div> <!-- appointment__teb -->
        </div> <!-- col-12 -->
    </div> <!-- row -->

    <div class="row">
        <?php
        // إعادة الاتصال بقاعدة البيانات واسترجاع البيانات مرة أخرى
        require_once "../back-end/config/conn.php";
        $result = $conn->query($sql);

        // إذا كان هناك بيانات متاحة
        if ($result->num_rows > 0) {
            // عرض كل مريض في عمود منفصل
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-sm-6">';
                echo '<div class="appointment__screen">';
                echo '<table class="table mt-5 table-bordered table-striped">';
                echo '<thead>';
                echo '<tr>';
                echo '<th scope="col"><span>ID:</span> <span>' . $row["id"] . '</span></th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                echo '<tr>';
                echo '<td><span>Name:</span> <span>' . $row["name"] . '</span></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td><span>Email:</span> <span>' . $row["email"] . '</span></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td><span>Phone:</span> <span>' . $row["phone"] . '</span></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo '<span>Diagnosis:</span>';
                echo '<a href="didagnosis.php?id=' . $row["id"] . '" class="btn__app btn__app__one btn__app btn__app__table">ِAdd</a>';
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo '<span>Prescription:</span>';
                echo '<a href="Prescription.php?id=' . $row["id"] . '" class="btn__app btn__app__one btn__app btn__app__table">Add</a>';
                echo '</td>';
                echo '</tr>';
                
                echo '</tbody>';
                echo '</table>';
                echo '</div> <!-- appointment__screen -->';
                echo '</div> <!-- col-sm-6 -->';
            }
        } else {
            // إذا لم تكن هناك بيانات متاحة
            echo "لا توجد بيانات.";
        }

        // إغلاق الاتصال
        $conn->close();
        ?>
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
  
  
  