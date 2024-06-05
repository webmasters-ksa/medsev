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
                <a class="nav-link" href="about doctor.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="doctor-profile.php">Profile</a>
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
 
<!-- start header -->
<header class="home">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 order-lg-0 order-1">
              <div class="home__text">
  
                  <div class="home__text__face">
                      <h1>Your Healthy Life is Our First Priority.</h1>
                  </div> <!-- home__text__face -->
                  
              </div> <!-- home__text -->
          </div> <!-- col-lg-6-->
  
  
          <div class="col-lg-6 order-lg-1 order-0 ms-auto">
              <div class="home__img">
                  <div class="home__img__coluction">
                      <img src="images/1.png" alt="">
                      <img src="images/2.png" alt="">
                      <img src="images/2.png" alt="">
  
                   
                      <img src= "images/5 (1).png" alt="">
  
                    
                  
                  </div><!-- home__img__coluction -->
  
  
              </div><!-- home__img -->
          </div> <!-- col-lg-6 -->
  
          
  
      </div> <!-- row -->
  </div> <!-- container -->
  
  </header>
  
  <!-- end header*** -->
  

<!-- start patient -->
<section class="patient">

    <div class="home__heart__shape">
        <img src="images/3 (1).png" alt="">
    </div>

    <div class="container">

        <div class="patient__text">
<p>Services</p>
<h2>Clinic Services</h2>
        </div> <!-- patient__text -->
        <div class="row">
            
            <div class="col-xl-3 col-lg-4 col-md-6">

                <div class="patient__option">
                    
                    <div class="patient__option__choosee">
                        <div class="patient__option__choosee__hidden">
                            <i class="icofont icofont-doctor"></i>
                            <h3>view appointment</h3>
                            
                            <a href="appointment.php"><button class="patient__option__choosee__hidden--btn">View</button></a>
                        </div> <!-- patient__option__choosee__hidden -->
                        <div class="patient__option__choosee__show">
                            <i class="icofont icofont-doctor"></i>
                            <h3>view appointment</h3>
                            
                        </div> <!-- patient__option__choosee__show -->
                       
                    </div> <!-- patient__option__choosee -->


                </div> <!-- patient__option -->
            </div> <!-- col-lg-3 -->

            <div class="col-xl-3 col-lg-4 col-md-6">

                <div class="patient__option">
                    
                    <div class="patient__option__choosee">
                        <div class="patient__option__choosee__hidden">
                            <i class="icofont icofont-prescription"></i>
                            <h3>patient record</h3>
                            
                            <a href="patient record.php"><button class="patient__option__choosee__hidden--btn">View</button></a>
                        </div> <!-- patient__option__choosee__hidden -->
                        <div class="patient__option__choosee__show">
                            <i class="icofont icofont-prescription"></i>
                            <h3>patient record</h3>
                           
                        </div> <!-- patient__option__choosee__show -->
                       
                    </div> <!-- patient__option__choosee -->


                </div> <!-- patient__option -->
            </div> <!-- col-lg-3 -->


   
        </div><!--row -->
    </div><!-- container -->
</section><!-- patient -->
<!-- end patient -->




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


