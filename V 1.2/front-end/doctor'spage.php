<?php
include "../back-end/includes/navbar.php";
?>
 

<!-- start table-cell -->
<section class="table-cell doctor-padge">
<div class="container">
    <div class="table__cell">
        <div class="table__cell__text">

        <h2>Dr. Sarah Taylor</h2>
        <h3>Neurosurgeon.</h3>
        <span>MBBS in Neurology, PHD in Neurosurgeon.</span>

        </div> <!-- table__cell__text -->
    </div> <!-- table__cell -->

    
</div> <!-- container -->



</section> <!-- table-cell -->
<!-- end table-cell -->


<!-- start doctor-profile -->
<section class="doctor-profile">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="doctorprofile">
                    <div class="doctorprofile__img">
                     <img src="images/3.jpg" alt="">
                    </div> <!-- doctorprofile__img -->
                    

                    <div class="doctorprofile__text">
<div class="doctorprofile__text__contact">
<h2>Contact info</h2>

    <ul class="d-flex flex-column" >
      <li> <i class="fa-solid fa-phone"></i> <span>Call : +07 554 332 322</span> </li>
      <li> <i class="fa-solid fa-envelope"></i> <span>hello@medsev.com</span></li>
      <li>  <i class="fa-solid fa-location-dot"></i> <span> 210-27 Quadra, Canada</span></li>
    </ul>

</div> <!-- doctorprofile__text__contact -->


<div class="doctorprofile__text__Working">
    <h3>Working hours</h3>
<div class=" d-flex doctorprofile__text__Working__time">
    <ul class="d-flex flex-column" >
        <li> <span>Monday</span>  </li>
        <li> <span>Tuesday</span> </li>
        <li> <span>Wednesday</span>  </li>
        <li> <span>Wednesday</span>  </li>
      </ul>


      <ul class="d-flex flex-column" >
        <li>  <span>9:00 am - 8:00 pm</span> </li>
        <li>  <span>9:00 am - 8:00 pm</span> </li>
        <li>  <span>9:00 am - 8:00 pm</span> </li>
        <li>  <span>9:00 am - 8:00 pm</span> </li>
      </ul>
      
</div>
</div> <!-- doctorprofile__text__Working -->
                    </div> <!-- doctorprofile__text -->
                    
                </div> <!-- doctorprofile -->
            </div> <!-- col-lg-5 -->


            <div class="col-lg-7">
                <div class="doctorinfo">
                    <div class="doctorinfo__phy">
                    <h4>Biography</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <span>Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</span>
                    
                    </div> <!-- doctorinfo__phy -->


                    <div class="doctorinfo__phy doctorinfo__ed">
                    <h4>Education</h4>

                     <ul>
                        <li>PHD degree in Neorology at University of Mediserv (2006)</li>
                        <li>Master of Neoro Surgery at University of Mediserv (2002)</li>
                        <li>MBBS degree in Neurosciences at University of Mediserv (2002)</li>
                        <li>Higher Secondary Certificate at Mediserv collage (1991)</li>

                     </ul>
                        </div> <!-- doctorinfo__phy -->
    
                </div> <!-- doctorinfo -->

            </div> <!-- col-lg-7 -->
        </div> <!-- row --> 
    </div> <!-- container -->
</section> <!-- doctor-profile -->
<!-- end doctor-profile -->


<!-- start doctor-app-->
<section class="doctor-app">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="doctor__apps d-flex justify-content-center ">
                    <div class="doctor__app my-3">
                        <h2> Book your appointment</h2>
                        <p>We will confirm your appointment within 2 hours</p>
                 

                       <div class="row">
                        <div class="col-md-6">
                            <div class="meet__doctor__search">
                                <div class="meet__doctor__search__icon">
                                    <i class="icofont icofont-business-man-alt-1"></i>
                                </div> <!-- meet__doctor__search__icon -->
            
                                <form action="#" class="meet__doctor__search__meet">
                                    <label for="nameapp">name</label>
                                    <input type="text" id="nameapp" placeholder="Enter Your Name" name="search">
                                </form>
            
            
                            </div> <!-- meet__doctor__search -->
                        </div> <!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="meet__doctor__search">
                                <div class="meet__doctor__search__icon">
                                    <i class="icofont icofont-ui-message"></i>
                                </div> <!-- meet__doctor__search__icon -->
            
                                <form action="#" class="meet__doctor__search__meet">
                                    <label for="emailapp">Email</label>
                                    <input type="email" id="emailapp" placeholder="Enter Your Email" name="search">
                                </form>
            
            
                            </div> <!-- meet__doctor__search -->
                        </div> <!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="meet__doctor__search">
                                <div class="meet__doctor__search__icon">
                                    <i class="icofont icofont-ui-call"></i>
                                </div> <!-- meet__doctor__search__icon -->
            
                                <form action="#" class="meet__doctor__search__meet">
                                    <label for="textph">Phone</label>
                                    <input type="text" id="textph" placeholder="Enter Your Number" name="search">
                                </form>
            
            
                            </div> <!-- meet__doctor__search -->
                        </div> <!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="meet__doctor__search">
                                <div class="meet__doctor__search__icon">
                                    <i class="icofont icofont-hospital st-current"></i>
                                </div> <!-- meet__doctor__search__icon -->
            
                                <form action="#" class="meet__doctor__search__meet">
                                    <label for="control">Category</label>
                                    <select class="form-control" id="control" fdprocessedid="3kg25q">
                                        <option>Neurosurgeon</option>
                                        <option>Cardiology</option>
                                        <option>Pathology</option>
                                        <option>Dental Care</option>
                                        </select>
                                </form>
            
            
                            </div>
                        </div> <!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="meet__doctor__search">
                                <div class="meet__doctor__search__icon">
                                    <i class="icofont icofont-doctor"></i>
                                </div> <!-- meet__doctor__search__icon -->
            
                                <form action="#" class="meet__doctor__search__meet">
                                    <label for="doctorapp">Doctor</label>
                                    <input type="text" id="doctorapp"placeholder="Choose Your Doctor" name="search">
                                </form>
            
            
                            </div> <!-- meet__doctor__search -->
                        </div> <!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="meet__doctor__search">
                                <div class="meet__doctor__search__icon">
                                    <i class="icofont icofont-doctor"></i>
                                </div> <!-- meet__doctor__search__icon -->
            
                                <form action="#" class="meet__doctor__search__meet">
                                    <label for="ageapp">Age</label>
                                    <input type="text" id="ageapp" placeholder="Your Age" name="search">
                                </form>
            
            
                            </div> <!-- meet__doctor__search -->
                        </div> <!-- col-md-6 -->
                 <div class="col-md-6">
                            <div class="meet__doctor__search">
                                <div class="meet__doctor__search__icon">
                                  <i class="icofont icofont-clock-time"></i>
                                </div> <!-- meet__doctor__search__icon -->
            
                                <form action="#" class="meet__doctor__search__meet">
                                    <label for="control">day</label>
                                    <select class="form-control" id="control" fdprocessedid="3kg25q">
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Wednesday</option>
                              
                                        </select>
                                </form>
            
            
                            </div>
                        </div> <!-- col-md-6 -->
                       </div> <!-- row -->
                     
                        
                    <div class="doctor__app__btn">
                      <button class="btn__app" type="submit">submit</button>
                    </div>
                    </div> <!-- doctor__app -->

                    <div class="doctor__app__img">
                      
                        <img src="images/3.png" alt="">
                    </div> <!-- doctor__app__img -->
                    
                </div> <!-- doctor__apps -->
      

            </div> <!-- col-lg-6 -->


            <div class="col-xl-5 col-lg-5">
                <div class="doctor__appimg">
                  <div class="meet__doctor__search">
                    <div class="meet__doctor__search__icon">
                        <i class="icofont icofont-ui-call"></i>
                    </div> <!-- meet__doctor__search__icon -->

                    <div class="meet__doctor__search__meet">
                       <h3>Emergency Call</h3>
                       <p>+07 554 332 322</p>
                    </div>


                </div> <!-- meet__doctor__search -->
                    <img src="images/4.jpg" alt="">

                </div> <!-- doctor__appimg -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->

</section> <!-- doctor-app -->
<!-- end doctor-app-->





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
                  210-27 Quadra, Market Street,
                  <br> Victoria Canada
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
        
        <div class="footertwo text-center py-2">
          <p>Copyright @2023 Medsev. Designed By <a href=""> HiBootstrap</a></p>
        </div>
      </footer> <!-- footer -->
      <!-- end footer -->

  <!-- ///////////////////  js /////////////////////// -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/doctor.js"></script>
  <script src="js/main.js"></script>
  
  </body>
  </html>
  