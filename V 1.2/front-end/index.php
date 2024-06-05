<?php
include "../back-end/includes/navbar.php";
?>
 
 
<!-- start header -->
<header class="home">
<div class="container">
    <div class="row">
        <div class="col-lg-6 order-lg-0 order-1">
            <div class="home__text">

                <div class="home__text__face">
                    <h1> Your Healthy Life is Our First Priority.</h1>
                    <p>Welcome to our clinic, where your health is our first priority. We are dedicated to providing you with personalized care and state-of-the-art treatments to ensure you live a healthy, vibrant life. Trust us to be your partners in health..</p>
                </div> <!-- home__text__face -->

                <div class="home__text__btn">  
                  <a href="#"><button class="home__text__btn--btn home__text__btn--btn2">Learn More</button></a>  

                </div>
                
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
<h2>Our Clinic Services</h2>
        </div> <!-- patient__text -->
        <div class="row">
            
            <div class="col-xl-3 col-lg-4 col-md-6">

                <div class="patient__option">
                    
                    <div class="patient__option__choosee patient__option__choosee2">
                        <div class="patient__option__choosee__hidden">
                            <i class="icofont icofont-doctor"></i>
                            <h3>Find a Doctor</h3>
                            <p>Find a doctor and book an appointment</p>
                            <a href="meet-doctor.php"><button class="patient__option__choosee__hidden--btn">View</button></a>
                        </div> <!-- patient__option__choosee__hidden -->
                        <div class="patient__option__choosee__show">
                            <i class="icofont icofont-doctor"></i>
                            <h3>Find a Doctor</h3>
                            <p>Find a doctor and book an appointment</p>
                        </div> <!-- patient__option__choosee__show -->
                       
                    </div> <!-- patient__option__choosee -->


                </div> <!-- patient__option -->
            </div> <!-- col-xl-3 col-lg-4 -->

            <div class="col-xl-3 col-lg-4 col-md-6">

<div class="patient__option">
    
    <div class="patient__option__choosee patient__option__choosee2">
        <div class="patient__option__choosee__hidden">
            <i class="icofont icofont-prescription"></i>
            <h3>Diagnosis</h3>
            <p>View Your Diagnosis</p>
            <a href="diagnosis.php?id=<?php echo $_SESSION['user']['id'];; ?>"><button class="patient__option__choosee__hidden--btn">View</button></a>
        </div> <!-- patient__option__choosee__hidden -->
        <div class="patient__option__choosee__show">
            <i class="icofont icofont-prescription"></i>
            <h3>Diagnosis</h3>
            <p>View Your Diagnosis</p>
        </div> <!-- patient__option__choosee__show -->
       
    </div> <!-- patient__option__choosee -->


</div> <!-- patient__option -->
</div> <!-- col-xl-3 col-lg-4 -->


<div class="col-xl-3 col-lg-4 col-md-6">

<div class="patient__option">
    
    <div class="patient__option__choosee patient__option__choosee2">
        <div class="patient__option__choosee__hidden">
            <i class="icofont icofont-patient-file"></i>
            <h3>A Prescription</h3>
            <p>View Your Prescription and The Times to Take The Medication</p>
            <a href="patient'spersonal.php?id=<?php echo $_SESSION['user']['id'];; ?>"><button class="patient__option__choosee__hidden--btn">View</button></a>
        </div> <!-- patient__option__choosee__hidden -->
        <div class="patient__option__choosee__show">
            <i class="icofont icofont-patient-file"></i>
            <h3>A Prescription</h3>
            <p>View Your Prescription and The Times to Take The Medication</p>
        </div> <!-- patient__option__choosee__show -->
       
    </div> <!-- patient__option__choosee -->


</div> <!-- patient__option -->
</div> <!-- col-xl-3 col-lg-4 -->


              
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


