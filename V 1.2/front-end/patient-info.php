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
<section class="table-cell patient-personal">
    <div class="container">
        <div class="table__cell">
            <div class="table__cell__text">
    
            <h2>View Data of Patients</h2>
    
    
            <div class="table__cell__text__plan table__cell__text__plan2">
                 <a href="index-admin.php"><span>Home</span></a>
                <i class="fa-solid fa-chevron-right"></i>
                <span>patient</span>
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
                        <h2>Add Patient's Data</h2>
                       
                 

                   <div class="row">
    <div class="col-12">
    <form action="../back-end/forms/add-patient.php" method="post" class="meet__doctor__search__meet">
            <div class="meet__doctor__search">
                <div class="meet__doctor__search__icon">
                    <i class="icofont icofont-business-man-alt-1"></i>
                </div>
                <label for="nameapp">Name</label>
                <input type="text" id="nameapp" placeholder="Enter Your Name" name="name">
            </div>

            <div class="meet__doctor__search">
                <div class="meet__doctor__search__icon">
                    <i class="icofont icofont-ui-message"></i>
                </div>
                <label for="emailapp">Email</label>
                <input type="email" id="emailapp" placeholder="Enter Your Email" name="email">
            </div>

            <div class="meet__doctor__search">
                <div class="meet__doctor__search__icon">
                    <i class="icofont icofont-ui-call"></i>
                </div>
                <label for="textph">Phone</label>
                <input type="text" id="textph" placeholder="Enter Your Number" name="phone">
            </div>

            <div class="meet__doctor__search">
                <div class="meet__doctor__search__icon">
                    <i class="icofont icofont-doctor"></i>
                </div>
                <label for="passwordapp">Password</label>
                <input type="password" id="passwordapp" placeholder="Your Password" name="password">
            </div>

            <div class="meet__doctor__search">
                <div class="meet__doctor__search__icon">
                    <i class="icofont icofont-doctor"></i>
                </div>
                <label for="ageapp">Age</label>
                <input type="text" id="ageapp" placeholder="Your Age" name="age">
            </div>

            <div class="doctor__app__btn">
                <button class="btn__app" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</div></div>
        <div class="col-12">
        <div class="appointment__teb">
        <?php
// الاتصال بقاعدة البيانات
require_once "../back-end/config/conn.php";


// استعلام قاعدة البيانات لاسترجاع البيانات
$sql = "SELECT `id`, `name`, `email`, `phone`, `age` FROM `patient`";
$result = $conn->query($sql);

// إنشاء الجدول الديناميكي
if ($result->num_rows > 0) {
    echo "<table class='table mt-5 text-center table-bordered table-striped'>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Age</th>
                <th>Update</th>
                <th>Delete</th>
            </thead>
            <tbody>";
    // عرض البيانات في الجدول
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["age"] . "</td>
                <td><a href='update-patient.php?id=" . $row["id"] . "'>Update</a></td>
                <td><a href='../back-end/delete/patient.php?id=" . $row["id"] . "'>Delete</a></td>
            </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "لا توجد بيانات.";
}
$conn->close();
?>

        </div> <!-- appointment__teb -->
        </div> <!-- col-12 -->
        </div> <!-- row -->
        </div> <!-- container -->
        
       
    </section> <!-- appointment -->
       
       
       
          <!-- ///////////////////  js /////////////////////// -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
  
  </body>
  </html>
  
  
  