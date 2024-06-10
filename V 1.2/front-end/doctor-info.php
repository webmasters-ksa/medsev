<?php
include "../back-end/includes/navbar.php";
?>
 
 
          <!-- start table-cell -->
<section class="table-cell patient-personal">
    <div class="container">
        <div class="table__cell">
            <div class="table__cell__text">
    
            <h2>View Doctors</h2>
    
    
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
                                    <!-- <i class="icofont icofont-business-man-alt-1"></i> -->
                                </div> <!-- meet__doctor__search__icon -->
            
                                <form action="../back-end/forms/add-doctor.php" method="post" class="meet__doctor__search__meet" enctype="multipart/form-data">
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
            <!-- <div class="container"> -->
    <div class="row">
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
                ?>
            </div> <!-- appointment__teb -->
        </div> <!-- col-12 -->
    </div> <!-- row -->

    <div class="row">
        <?php
        // إعادة استعلام قاعدة البيانات لاسترجاع الأطباء
        require_once "../back-end/config/conn.php";
        $result = $conn->query($sql);

        // إذا كان هناك بيانات متاحة
        if ($result->num_rows > 0) {
            // عرض كل طبيب في عمود منفصل
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-sm-6">';
                echo '<div class="appointment__screen">';
                echo '<table class="table mt-5 table-bordered table-striped">';
                echo '<thead>';
                echo '<tr>';
                echo '<th scope="col"><span>ID:</span> <span>' . $row["id"] . '</span></th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                echo '<tr>';
                echo '<td><span>Name:</span> <span>' . $row["Name"] . '</span></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td><span>Email:</span> <span>' . $row["Email"] . '</span></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td><span>Phone:</span> <span>' . $row["Phone"] . '</span></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td><span>Age:</span> <span>' . $row["Age"] . '</span></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo '<span>Update:</span>';
                echo '<a href="update-doctor.php?id=' . $row["id"] . '" class="btn__app btn__app__one btn__app btn__app__table">Update</a>';
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo '<span>Delete:</span>';
                echo '<a href="../back-end/delete/doctor.php?id=' . $row["id"] . '" class="btn__app btn__app__one btn__app btn__app__table">Delete</a>';
                echo '</td>';
                echo '</tr>';
                echo '</tbody>';
                echo '</table>';
                echo '</div> <!-- appointment__screen -->';
                echo '</div> <!-- col-sm-6 -->';
            }
        } else {
            // إذا لم تكن هناك بيانات متاحة
            echo "لا توجد بيانات";
        }

        // إغلاق الاتصال
        $conn->close();
        ?>
    </div> <!-- row -->
</div> <!-- container -->
    </section> <!-- appointment -->
       
       
        

               
      
          <!-- ///////////////////  js /////////////////////// -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
  
  </body>
  </html>
  
  
  