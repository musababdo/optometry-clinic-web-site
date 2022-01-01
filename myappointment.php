<?php

include("header.php");
include("dbconnection.php");
error_reporting(0);
session_start();
$phone = $_SESSION[phone];
if(isset($_POST['cancel'])){
  
  $sql ="UPDATE vappointment SET status='1' WHERE phone='$phone'";
      $qsql=mysqli_query($con,$sql);
      if(mysqli_affected_rows($con) == 1)
      {
          echo "<script>alert('تم الغاء الحجز بنجاح');</script>";
          echo "<script>window.location='index.php';</script>";
      }
  
    }

 ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>مركز منال عووضه للبصريات - لوحه التحكم</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css" rel="stylesheet">


.indent-small {
  margin-left: 5px;
}
.form-group.internal {
  margin-bottom: 0;
}
.dialog-panel {
  margin: 10px;
}
.datepicker-dropdown {
  z-index: 200 !important;
}
.panel-body {
  background: #e5e5e5;
  /* Old browsers */
  background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* FF3.6+ */
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
  /* Chrome,Safari4+ */
  background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* Opera 12+ */
  background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
  /* IE10+ */
  background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
  /* IE6-9 fallback on horizontal gradient */
  font: 600 15px "Open Sans", Arial, sans-serif;
}
label.control-label {
  font-weight: 600;
  color: #777;
}

table { 
	width: 650px; 
	border-collapse: collapse; 
	margin: auto;
	margin-top:50px;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #004684; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 14px;
	}



	</style>
</head>

<body>

<!-- Content -->
<div id="content">
            <!-- Make an Appointment -->
            <section class="main-oppoiment ">
                <div class="container">
                    <div class="row">

                        <!-- Make an Appointment -->
                        <div class="col-lg-7">
                            <div class="appointment">

                                <!-- Heading -->
                                <div class="heading-block head-left margin-bottom-50">
                                    <h4>حجوزاتي</h4>
                                    
                                </div>
                                <div style="margin-left:50px;">
 <form name="updateticket" id="updatecomplaint" method="post"> 
     <?php    
            $query_res= mysqli_query($con,"select * from vappointment where phone='$phone' and status = '0'");
            if(mysqli_num_rows($query_res)){
                while($r=mysqli_fetch_array($query_res)){		
                  echo '<table  border="0" cellspacing="0" cellpadding="0">
                  <tr>
                
                    <tr >
                    <td>'.$r['name'].'</td>
                      <td><b>أسم المريض</b></td>
                    </tr>
                    <tr >
                    <td>'.$r['phone'].'</td>
                      <td><b>رقم الهاتف</b></td>
                    </tr>
                    <tr >
                        <td>'.$r['email'].'</td>
                      <td><b>البريد الالكتروني</b></td>
                    </tr>
                    <tr >
                      <td><b>Right Eye DIS</b></td>
                      <td>SPH = '.$r['rightdis_sph'].' , CYL = '.$r['rightdis_cyl'].' , AX = '.$r['rightdis_ax'].'</td>
                    </tr>
                
                    <tr >
                      <td><b>Right Eye RED</b></td>
                      <td>SPH = '.$r['rightred_sph'].' , CYL = '.$r['rightred_cyl'].' , AX = '.$r['rightred_ax'].'</td>
                    </tr>
                
                    <tr >
                      <td><b>Left Eye DIS</b></td>
                      <td>SPH = '.$r['leftdis_sph'].' , CYL = '.$r['leftdis_cyl'].' , AX = '.$r['leftdis_ax'].'</td>
                    </tr>
                
                    <tr >
                      <td><b>Left Eye RED</b></td>
                      <td>SPH = '.$r['leftred_sph'].' , CYL = '.$r['leftred_cyl'].' , AX ='.$r['leftred_ax'].'</td>
                    </tr>
                
                    <tr>
                      <td><b>الاحداث</b></td>
                      <td><input type="submit" name="cancel"  class="btn btn-primary" value="الغاء الحجز"></td>
                      </tr>
                 
                </table>';				
                }	
               }else{
                echo '<h5 class="card-title">ليس لديك حجوزات</h5>';
               }
        ?>
 
 </form>
</div>
                            </div>
                        </div>
                    </div>
                </div> 
        </div>
    </div>
</div>
</section>
</div>

</body>
</html>

<?php
include("footer.php");
?>

   