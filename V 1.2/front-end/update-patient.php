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
 

      <div class="doctor__apps d-flex justify-content-center">
        <div class="doctor__app doctor__app__pe my-3">
            <h2>Edit Patient's Data</h2>
            <div class="row">
                <div class="col-12">
                    <?php
                    // تأكيد الاتصال بقاعدة البيانات
                    require_once "../back-end/config/conn.php";

                    // التحقق من وجود معرف ممرر عبر الرابط
                    if(isset($_GET['id']) && !empty($_GET['id'])){
                        // استخراج معرف السجل
                        $id = $_GET['id'];

                        // استعداد الاستعلام لاسترجاع بيانات السجل المراد تعديله
                        $sql = "SELECT * FROM patient WHERE id = ?";
                        
                        if($stmt = $conn->prepare($sql)){
                            // ربط المتغيرات مع البيانات
                            $stmt->bind_param("i", $id);
                            
                            // محاولة تنفيذ الاستعلام
                            if($stmt->execute()){
                                // استخراج نتيجة الاستعلام
                                $result = $stmt->get_result();
                                
                                if($result->num_rows == 1){
                                    // استخراج البيانات ووضعها في حقول الاستمارة
                                    $row = $result->fetch_assoc();
                                    echo '
                                    <form action="../back-end/edit/patient.php" method="post" class="meet__doctor__search__meet">
                                        <input type="hidden" name="id" value="' . $row["id"] . '">
                                        <div class="meet__doctor__search">
                                            <div class="meet__doctor__search__icon">
                                                <i class="icofont icofont-business-man-alt-1"></i>
                                            </div>
                                            <label for="nameapp">Name</label>
                                            <input type="text" id="nameapp" placeholder="Enter Your Name" name="name" value="' . $row["name"] . '">
                                        </div>
                                        <div class="meet__doctor__search">
                                            <div class="meet__doctor__search__icon">
                                                <i class="icofont icofont-ui-message"></i>
                                            </div>
                                            <label for="emailapp">Email</label>
                                            <input type="email" id="emailapp" placeholder="Enter Your Email" name="email" value="' . $row["email"] . '">
                                        </div>
                                        <div class="meet__doctor__search">
                                            <div class="meet__doctor__search__icon">
                                                <i class="icofont icofont-ui-call"></i>
                                            </div>
                                            <label for="textph">Phone</label>
                                            <input type="text" id="textph" placeholder="Enter Your Number" name="phone" value="' . $row["phone"] . '">
                                        </div>
                                        <div class="meet__doctor__search">
                                            <div class="meet__doctor__search__icon">
                                                <i class="icofont icofont-doctor"></i>
                                            </div>
                                            <label for="passwordapp">Password</label>
                                            <input type="password" id="passwordapp" placeholder="Your Password" name="password" value="' . $row["password"] . '">
                                        </div>
                                        <div class="meet__doctor__search">
                                            <div class="meet__doctor__search__icon">
                                                <i class="icofont icofont-doctor"></i>
                                            </div>
                                            <label for="ageapp">Age</label>
                                            <input type="text" id="ageapp" placeholder="Your Age" name="age" value="' . $row["age"] . '">
                                        </div>
                                        <div class="doctor__app__btn">
                                            <button class="btn__app" type="submit">Submit</button>
                                        </div>
                                    </form>';
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
                </div>
            </div>
        </div>
    </div>


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


