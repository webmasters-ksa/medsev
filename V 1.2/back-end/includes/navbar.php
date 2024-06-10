<?php
session_start();

// التحقق مما إذا كان المستخدم مسجل الدخول
$loggedIn = isset($_SESSION['user']);

// الحصول على الصفحة الحالية من عنوان URL
$current_page = basename($_SERVER['PHP_SELF']);

// تفحص نوع المستخدم من الجلسة أو أي مصدر آخر
$user_type = isset($_SESSION['role']) ? $_SESSION['role'] : ''; // تأكد من أن $_SESSION['role'] مُعرفة
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medsev - Healthcare Clinic</title>
    
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<!-- start nav -->
<nav class="header ">
    <div id="navbar" >
      <nav class="navbar navbar-expand-lg " >
        <div class="container" >
             <?php
              // تحديد الروابط بناءً على نوع المستخدم
              $home_link = $user_type == "doctor" ? "index-doctor.php" : ($user_type == "patient" ? "index.php" : "");
              $about_link = $user_type == "doctor" ? "about doctor.php" : ($user_type == "patient" ? "about patient.php" : "");
              $user_id = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : '';
              $profile_link = $user_type == "doctor" ? "doctor-profile.php?id=" . $user_id : ($user_type == "patient" ? "sick profile.php" : "#");
              ?>
          <a class="navbar-brand" href="<?php echo $home_link; ?>"><img src="images/logo.png" alt=""></a>
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
                <a class="nav-link <?php echo ($current_page == basename($home_link)) ? 'active' : ''; ?>" aria-current="page" href="<?php echo $home_link; ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo ($current_page == basename($about_link)) ? 'active' : ''; ?>" href="<?php echo $about_link; ?>">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo ($current_page == basename($profile_link)) ? 'active' : ''; ?>" href="<?php echo $profile_link; ?>">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo ($current_page == 'contact us.php') ? 'active' : ''; ?>" href="contact us.php">Contact Us</a>
              </li>
            </ul>
            <div class="navbar__log">
              <?php if ($loggedIn): ?>
                <a href="logout.php"><i class="fa-regular fa-user"></i> <span>LOGOUT</span></a>
              <?php else: ?>
                <a href="login.php"><i class="fa-regular fa-user"></i> <span>LOGIN</span></a>
              <?php endif; ?>
            </div> <!-- navbar__log -->
          </div>
        </div>
      </nav>
    </div>
</nav>  
<!-- end nav -->

<?php
// إعادة توجيه المستخدم إلى صفحة تسجيل الدخول إذا لم يكن مسجل الدخول
if (!$loggedIn) {
    header("Location: login.php");
    exit();
}
?>
