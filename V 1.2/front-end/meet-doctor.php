<?php
require_once "../back-end/config/conn.php";

$sql = "SELECT `id`, `Name`, `Email`, `Phone`, `Specialty`, `Qualifications`, `Age`, `password`, `image_path` FROM `doctor`";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medsev - Healthcare Clinic </title>
    
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
   
    <link rel="stylesheet" href="css/style.css">
</head>
<body>



<!-- start nav -->
<nav class="header ">

    <div id="navbar" >
      <nav class="navbar navbar-expand-lg " >
     
        <div class="container" >
          <a class="navbar-brand" href="index.php"><img src="images/logo.png"  alt=""></a>
          
    
    
          <button class="navbar-toggler btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon">
                <svg viewBox="0 0 175 80" width="45" height="35">
                    <rect width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                    <rect y="30" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                    <rect y="60" width="80" height="15" fill="#f0f0f0" rx="10"></rect>
                </svg>
            </span>
          
        </button>
    
    
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about patient.php">About</a>
              </li>
           
    
              <li class="nav-item">
                <a class="nav-link" href="contact us.php">Contact Us</a>
              </li>
              <li class="dropdown">
                <a class="dropdown__btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="icofont icofont-settings"></i> <span>Settings</span> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="update-patient.php">Update Information</a></li>
                    <li><a class="dropdown-item" href="login.php">Logout</a></li>
                </ul>
            </li>
            
            </ul>
            <div class="navbar__log">
              <a href="login.php"><i class="fa-regular fa-user"></i> <span>LOGIN</span></a>
  
            </div> <!-- navbar__log -->
          </div>
        </div>
      </nav>
    <div>
     
    </nav>  
      <!-- end nav -->

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
                    echo '<a href="doctor-details.php?id=' . $row["id"] . '"><img src="../back-end/upload/' . $row["image_path"] . '" alt="Doctor Image"></a>';
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


