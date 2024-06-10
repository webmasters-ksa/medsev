<?php
require_once "../back-end/config/conn.php";

$sql = "SELECT `id`, `Name`, `Email`, `Phone`, `Specialty`, `Qualifications`, `Age`, `password`, `image_path` FROM `doctor`";
$result = $conn->query($sql);

include "../back-end/includes/navbar.php";
?>

<!-- start table-cell -->
<section class="table-cell">
<div class="container">
    <div class="table__cell">
        <div class="table__cell__text">

        <h2>Meet Our Qualified Doctors</h2>


        <div class="table__cell__text__plan">
             <a href="index.php"><span>Home</span></a>
            <i class="fa-solid fa-chevron-right"></i>
            <span>Doctors</span>
        </div> <!-- table__cell__text__plan -->

        </div> <!-- table__cell__img -->
    </div> <!-- table__cell -->

    
</div> <!-- container -->




</section> <!-- table-cell -->
<!-- end table-cell -->

<!-- start choose-doctor -->
<section class="choose-doctor">
    <div class="container">
        <div class="row" id="meetDoctor">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-lg-4 col-sm-6">';
                    echo '<div class="choose__doctor">';
                    echo '<div class="choose__doctor__img">';
                    echo '<a href="doctor-profile.php?id=' . $row["id"] . '"><img src="../back-end/forms/' . $row["image_path"] . '" alt="Doctor Image"></a>';
                    echo '</div>'; // choose__doctor__img
                    echo '<div class="choose__doctor__text">';
                    echo '<h2><a href="doctor-profile.php?id=' . $row["id"] . '">' . $row["Name"] . '</a></h2>';
                    echo '<p>' . $row["Specialty"] . '</p>';
                    echo '</div>';
                    echo '</div>'; // choose__doctor
                    echo '</div>'; // col-lg-4 col-sm-6
                }
            } else {
                echo "No doctors found.";
            }
            ?>
        </div> <!-- row -->
    </div><!-- container -->
</section> <!-- choose-doctor -->
<!-- end choose-doctor -->



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
<script src="js/doctor.js"></script>

<script src="js/main.js"></script>

</body>
</html>


