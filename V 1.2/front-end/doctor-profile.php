<?php
include "../back-end/includes/navbar.php";
?>
 

<!-- start table-cell -->
<?php
// اتصال بقاعدة البيانات
require_once "../back-end/config/conn.php";

// التحقق من وجود معرف ممرر عبر الرابط
if(isset($_GET['id']) && !empty($_GET['id'])){
    // استخراج معرف السجل
    $id = $_GET['id'];

    // استعداد الاستعلام لاسترجاع بيانات السجل المراد تعديله
    $sql = "SELECT * FROM doctor WHERE id = ?";
    
    if($stmt = $conn->prepare($sql)){
        // ربط المتغيرات مع البيانات
        $stmt->bind_param("i", $id);
        
        // محاولة تنفيذ الاستعلام
        if($stmt->execute()){
            // استخراج نتيجة الاستعلام
            $result = $stmt->get_result();
            
            if($result->num_rows == 1){
                // استخراج البيانات ووضعها في العناصر في الصفحة
                $row = $result->fetch_assoc();
                ?>
                
                <section class="table-cell doctor-padge">
                    <div class="container">
                        <div class="table__cell">
                            <div class="table__cell__text">
                                <h2><?php echo $row['Name']; ?></h2>
                                <span><?php echo $row['Specialty']; ?></span>
                            </div> <!-- table__cell__text -->
                        </div> <!-- table__cell -->
                    </div> <!-- container -->
                </section> <!-- table-cell -->

                <section class="doctor-profile patient-profile doctor-profile">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 ">
                                <div class="doctorprofile">
                                    <div class="doctorprofile__img">
                                        <img src="../back-end/upload/<?php echo $row['image_path']; ?>" alt="Doctor Image">
                                    </div>  <!-- doctorprofile__img -->
                                    <div class="doctorprofile__text">
                                        <div class="doctorprofile__text__contact">
                                            <h2>Contact info</h2>
                                            <ul class="d-flex flex-column">
                                                <li><i class="fa-solid fa-phone"></i> <span>Call : <?php echo $row['Phone']; ?></span></li>
                                                <li><i class="fa-solid fa-location-dot"></i> <span><?php echo $row['Email']; ?></span></li>
                                                <li><i class="fa-solid fa-location-dot"></i> <span><?php echo $row['Specialty']; ?></span></li>
                                                <li><i class="fa-solid fa-location-dot"></i> <span><?php echo $row['Qualifications']; ?></span></li>
                                                <li><i class="fa-solid fa-location-dot"></i> <span><?php echo $row['Age']; ?></span></li>
                                            </ul>
                                            
                                        </div> <!-- doctorprofile__text__contact -->
                                    </div> <!-- doctorprofile__text -->
                                </div> <!-- doctorprofile -->
                            </div> <!-- col-lg-5 -->
                        </div> <!-- row -->
                    </div> <!-- container -->
                </section> <!-- doctor-profile -->

                <?php
            } else{
                echo "لا يوجد بيانات للعرض.";
            }
        } else{
            echo "حدث خطأ ما، يرجى المحاولة مرة أخرى.";
        }
    }
    
    // إغلاق الاستعلام
    $stmt->close();
} else{
    echo "المعرف غير موجود.";
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>



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
                                      <i class="icofont icofont-clock-time"></i>
                                    </div> <!-- meet__doctor__search__icon -->
                                    <form action="../back-end/forms/book.php?doctor_id=<?php echo $id; ?>" method="POST" class="meet__doctor__search__meet">
                                        <label for="control">Day</label>
                                        <select class="form-control" id="control" name="time">
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                        </select>
                                        <div class="doctor__app__btn">
                                          <button class="btn__app" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- col-md-6 -->
                        </div> <!-- row -->
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
  