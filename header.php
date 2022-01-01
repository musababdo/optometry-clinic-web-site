<?php
error_reporting(0);
include("dbconnection.php");
$dt = date("Y-m-d");
$tim = date("H:i:s");
?>
<?php
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="M_Adnan" />
<!-- Document Title -->
<title>مركز منال عووضة للبصريات</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- StyleSheets -->
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/myfont.css">

<!-- Fonts Online -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">

<!-- JavaScripts -->
<script src="js/vendors/modernizr.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>

<!-- Page Loader -->
<div id="loader">
  <div class="position-center-center">
    <div class="cssload-thecube">
      <div class="cssload-cube cssload-c1"></div>
      <div class="cssload-cube cssload-c2"></div>
      <div class="cssload-cube cssload-c4"></div>
      <div class="cssload-cube cssload-c3"></div>
    </div>
  </div>
</div>


  
  <!-- Header -->
  <header class="header-style-2">
    <div class="container">
      <div class="logo"> <a href="index.html"><img src="images/logo.jpg" alt="" style="height: 51px;"></a> </div>
      <div class="head-info">
        <ul>
          <li> <i class="fa fa-phone"></i>
            <p>+249913456988<br>
            +2491245698568</p>
          </li>
          <li> <i class="fa fa-envelope-o"></i>
            <p>manalawooda@gmail.com<br>
              info@gmail.com</p>
          </li>
          <li> <i class="fa fa-map-marker"></i>
            <p>شارع السوق<br>
             بورتسودان</p>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- Nav -->
    <nav class="navbar ownmenu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        
        <!-- NAV -->
        <div class="collapse navbar-collapse navbar-right" id="nav-open-btn">
          <ul class="nav">
            <li> <a href="index.php">الرئيسيه </a></li>
            <li><a href="about.php">معلومات عنا</a></li>   
            <li><a href="show.php">المعرض</a></li>
            <?php
						if(empty($_SESSION[id])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">تسجيل دخول</a> </li>
							  <li class="nav-item"><a href="register.php" class="nav-link active">انشاء حساب</a> </li>';
							}
						else
							{
									//if user is login
									
									echo  '<li class="nav-item"><a href="patientappointment.php" class="nav-link active">احجز الان</a> </li>';
                  echo  '<li class="nav-item"><a href="profile.php" class="nav-link active">الصفحه الشخصيه</a> </li>';
                  echo  '<li class="nav-item"><a href="myappointment.php" class="nav-link active">حجوزاتي</a> </li>';
                  echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">تسجيل خروج</a> </li>';
							}

						?>
            <!-- <li><a href="patientappointment.php">حجز</a></li>          -->
            <li><a href="adminlogin.php">خاص بالاداره </a></li>          
          </ul>
        </div>
      </div>
    </nav>
  </header>