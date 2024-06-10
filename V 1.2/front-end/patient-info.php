<?php
include "../back-end/includes/navbar.php";
?>
 
 
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
               
                ?>
            </div> <!-- appointment__teb -->
        </div> <!-- col-12 -->
    </div> <!-- row -->

    <div class="row">
        <?php
        // إعادة الاتصال بقاعدة البيانات واسترجاع البيانات مرة أخرى
        require_once "../back-end/config/conn.php";
        $result = $conn->query($sql);

        // إذا كان هناك بيانات متاحة
        if ($result->num_rows > 0) {
            // عرض كل مريض في عمود منفصل
            while ($row = $result->fetch_assoc()) {
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
                echo '<td><span>Name:</span> <span>' . $row["name"] . '</span></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td><span>Email:</span> <span>' . $row["email"] . '</span></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td><span>Phone:</span> <span>' . $row["phone"] . '</span></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td><span>Age:</span> <span>' . $row["age"] . '</span></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo '<span>Update:</span>';
                echo '<a href="update-patient.php?id=' . $row["id"] . '" class="btn__app btn__app__one btn__app btn__app__table">Update</a>';
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>';
                echo '<span>Delete:</span>';
                echo '<a href="../back-end/delete/patient.php?id=' . $row["id"] . '" class="btn__app btn__app__one btn__app btn__app__table">Delete</a>';
                echo '</td>';
                echo '</tr>';
                echo '</tbody>';
                echo '</table>';
                echo '</div> <!-- appointment__screen -->';
                echo '</div> <!-- col-sm-6 -->';
            }
        } else {
            // إذا لم تكن هناك بيانات متاحة
            echo "لا توجد بيانات.";
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
  
  
  