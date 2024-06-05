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

          </div>
        </div>
      </nav>
    <div>
     
    </nav>  
      <!-- end nav -->
 
          <!-- start table-cell -->
<section class="table-cell patient-personal">
    <div class="container">
        <div class="table__cell">
            <div class="table__cell__text">
    
            <h2>View Appointment</h2>
    
    
            <div class="table__cell__text__plan table__cell__text__plan2">
                 <a href="index-admin.php"><span>Home</span></a>
                <i class="fa-solid fa-chevron-right"></i>
                <span>doctor</span>
            </div> <!-- table__cell__text__plan -->
    
            </div> <!-- table__cell__img -->
        </div> <!-- table__cell -->
    
        
    </div> <!-- container -->
    
    
    
    </section> <!-- table-cell -->
    <!-- end table-cell -->
 

    <section class="appointment patient-infoo">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="doctor__apps d-flex justify-content-center ">
                    <div class="doctor__app doctor__app__pe my-3">
                        <h2> Add the doctor's information</h2>
                       
                 

                       <div class="row">
                        <div class="col-12">
                            <div class="meet__doctor__search">
                                <div class="meet__doctor__search__icon">
                                    <i class="icofont icofont-business-man-alt-1"></i>
                                </div> <!-- meet__doctor__search__icon -->
            
                                <form action="../back-end/forms/add-doctor.php" method="post" class="meet__doctor__search__meet" enctype="multipart/form-data">>
                            <div class="row">
                                <div class="col-12">
                                    <div class="meet__doctor__search">
                                        <div class="meet__doctor__search__icon">
                                            <i class="icofont icofont-business-man-alt-1"></i>
                                        </div>
                                        <label for="nameapp">name</label>
                                        <input type="text" id="nameapp" placeholder="Enter Your Name" name="name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="meet__doctor__search">
                                        <div class="meet__doctor__search__icon">
                                            <i class="icofont icofont-ui-message"></i>
                                        </div>
                                        <label for="emailapp">Email</label>
                                        <input type="email" id="emailapp" placeholder="Enter Your Email" name="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="meet__doctor__search">
                                        <div class="meet__doctor__search__icon">
                                            <i class="icofont icofont-ui-call"></i>
                                        </div>
                                        <label for="textph">Phone</label>
                                        <input type="text" id="textph" placeholder="Enter Your Number" name="phone">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="meet__doctor__search">
                                        <div class="meet__doctor__search__icon">
                                            <i class="icofont icofont-doctor"></i>
                                        </div>
                                        <label for="ageapp">specialty</label>
                                        <input type="text" id="ageapp" placeholder="Your Specialty" name="specialty">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="meet__doctor__search">
                                        <div class="meet__doctor__search__icon">
                                            <i class="icofont icofont-doctor"></i>
                                        </div>
                                        <label for="ageapp">qualifications</label>
                                        <input type="text" id="ageapp" placeholder="Your Qualifications" name="qualifications">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="meet__doctor__search">
                                        <div class="meet__doctor__search__icon">
                                            <i class="icofont icofont-doctor"></i>
                                        </div>
                                        <label for="ageapp">password</label>
                                        <input type="text" id="ageapp" placeholder="Your password" name="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="meet__doctor__search">
                                        <div class="meet__doctor__search__icon">
                                            <i class="icofont icofont-business-man-alt-1"></i>
                                        </div>
                                        <label for="ageapp">Age</label>
                                        <input type="text" id="ageapp" placeholder="Your Age" name="age">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="meet__doctor__search">
                                        <div class="meet__doctor__search__icon">
                                            <i class="icofont icofont-business-man-alt-1"></i>
                                        </div>
                                        <label for="ageapp">Image</label>
                                        <input type="file" name="image" id="image" class="form-control" required>
                                    </div>
                                </div>
                                <div class="doctor__app__btn">
                                    <button class="btn__app" type="submit">submit</button>
                                </div>
                            </div>
                        </form>
                       <div class="doctor__app__img">
                      
                        <img src="images/3.png" alt="">
                    </div> <!-- doctor__app__img -->
                 
                    </div> <!-- doctor__app -->

                  
                    
                </div> <!-- doctor__apps -->
                </div>  </div>

            </div> <!-- col-lg-6 -->
        <div class="col-12">
        <div class="appointment__teb">
        <?php
// اتصال بقاعدة البيانات
require_once "../back-end/config/conn.php";

// استعلام قاعدة البيانات لاسترجاع الأطباء
$sql = "SELECT `id`, `Name`, `Email`, `Phone`, `Specialty`, `Qualifications`, `Age`, `password` FROM `doctor`";
$result = $conn->query($sql);

// إذا كان هناك بيانات متاحة
if ($result->num_rows > 0) {
    // بداية جدول HTML
    echo '<table class="table mt-5 text-center table-bordered table-striped">';
    echo '<thead>';
    echo '<th>ID</th>';
    echo '<th>Name</th>';
    echo '<th>Email</th>';
    echo '<th>Phone</th>';
    echo '<th>Age</th>';
    echo '<th>Update</th>';
    echo '<th>Delete</th>';
    echo '</thead>';
    echo '<tbody id="tBody">';

    // استرجاع البيانات ووضعها في الجدول
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["Name"] . '</td>';
        echo '<td>' . $row["Email"] . '</td>';
        echo '<td>' . $row["Phone"] . '</td>';
        echo '<td>' . $row["Age"] . '</td>';
        echo '<td><a href="update-doctor.php?id=' . $row["id"] . '" class="btn__app">Update</a></td>';
        echo '<td><a href="../back-end/delete/doctor.php?id=' . $row["id"] . '" class="btn__app">Delete</a></td>';
        echo '</tr>';
    }

    // نهاية الجدول
    echo '</tbody>';
    echo '</table>';
} else {
    // إذا لم تكن هناك بيانات متاحة
    echo "لا توجد بيانات";
}

// إغلاق الاتصال
$conn->close();
?>

        </div> <!-- appointment__teb -->
        </div> <!-- col-12 -->
        </div> <!-- row -->
        </div> <!-- container -->

 

          </div> <!-- row -->
      </div><!-- container -->
    </section> <!-- appointment -->
       
       
        

               
      
          <!-- ///////////////////  js /////////////////////// -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
  
  </body>
  </html>
  
  
  