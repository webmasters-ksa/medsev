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
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sick profile.php">Profile</a>

            </li>
     
            <li class="nav-item">
              <a class="nav-link" href="contact us.php">Contact Us</a>
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



    <!-- start login -->
    <section class="login signup">
        <div class="container-fluid">
          <div class="row ">
    
            <div class="col-lg-6">
    <div class="login__img">
      <img src="images/signup-bg.jpg" alt="">
    </div> <!-- login__img -->
            </div>
    
            <div class="col-lg-6 " >
    <div class="login__form signup__form ">
    <h2>Register Here</h2>
    <p>Already have an account?<a href="login.php">Log In</a></p>
    <form action="../back-end/forms/register.php" method="post">
      <div class="row">
        <div class="col-lg-6">
          <input type="text" name="text" placeholder="First Name" id="firstNameUp" >
        </div>
        <div class="col-lg-6">
            <input type="text" name="lastName" placeholder="Last Name" id="lastNameUp" >
          </div>

          <div class="col-lg-6">
            <input type="text" name="phoneNumber" placeholder="Phone Number" id="phoneNumberUP" >
          </div>
    
        <div class="col-lg-6">
          <input type="email" name="email" placeholder="Your Email" id="emailUP" >
        </div>
        <div class="col-lg-6">
          <input type="password" name="password--singup" placeholder="Password" id="passwordSingup" >
        </div>
        <!-- <div class="col-lg-6">
          <input type="password" name="password--singup" placeholder="Confirm Password" id="passwordUpConform" >
        </div> -->
    
        <div class="col-sm-12 ">
            <input type="checkbox" name="checkbox" id="checkbox" >
          <p>
   
            Yes, I agree with all <a href="#">Terms & Conditions</a>
          </p>
        </div>
    
        <div class="col-sm-12 text-center">
        <button class="btn1" id="signUP" >Sign Up</button>
        </div>
      </div> <!-- row -->
    
     
    
    
    </form>
    </div> <!-- login__form -->
            </div>
    
    
          </div> <!-- row -->
        </div> <!-- container   -->
      </section>
        <!-- end login -->
    
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


