<?php

include("dbconnection.php");
error_reporting(0);
session_start();

$id = $_GET['edit'];

if(isset($_POST['insert'])){
  
  $rightdis_sph = $_POST['rightdis_sph'];
  $rightdis_cyl = $_POST['rightdis_cyl'];
  $rightdis_ax  = $_POST['rightdis_ax'];
  
  $rightred_sph = $_POST['rightred_sph'];
  $rightred_cyl = $_POST['rightred_cyl'];
  $rightred_ax  = $_POST['rightred_ax'];
  
  $leftdis_sph  = $_POST['leftdis_sph'];
  $leftdis_cyl  = $_POST['leftdis_cyl'];
  $leftdis_ax   = $_POST['leftdis_ax'];
  
  $leftred_sph  = $_POST['leftred_sph'];
  $leftred_cyl  = $_POST['leftred_cyl'];
  $leftred_ax   = $_POST['leftred_ax'];
  
  $query1=mysqli_query($con,"insert into rightdis(sph,cyl,ax) values('$rightdis_sph','$rightdis_cyl','$rightdis_ax')");
  $query2=mysqli_query($con,"insert into rightred(sph,cyl,ax) values('$rightred_sph','$rightred_cyl','$rightred_ax')");
  $query3=mysqli_query($con,"insert into leftdis(sph,cyl,ax) values('$leftdis_sph','$leftdis_cyl','$leftdis_ax')");
  $query4=mysqli_query($con,"insert into leftred(sph,cyl,ax) values('$leftred_sph','$leftred_cyl','$leftred_ax')");
  
  $sql1 = "SELECT * From rightdis";
	$result1 = mysqli_query($con,$sql1);
	$rightdis_id;
  while($row1 = mysqli_fetch_array($result1)){
    $rightdis_id = $row1['id'];
  }

  $sql2 = "Select * From rightred";
	$result2 = mysqli_query($con,$sql2);
	$rightred_id;
  while($row2 = mysqli_fetch_array($result2)){
    $rightred_id = $row2['id'];
  }

  $sql3 = "Select * From leftdis";
	$result3 = mysqli_query($con,$sql3);
	$leftdis_id;
  while($row3 = mysqli_fetch_array($result3)){
    $leftdis_id = $row3['id'];
  }

  $sql4 = "Select * From leftred";
	$result4 = mysqli_query($con,$sql4);
	$leftred_id;
  while($row4 = mysqli_fetch_array($result4)){
    $leftred_id = $row4['id'];
  }

$sql ="UPDATE appointment SET rightdis_id='$rightdis_id',rightred_id='$rightred_id',
                 leftdis_id='$leftdis_id',leftred_id='$leftred_id' WHERE id='$id'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('تم التعديل بنجاح');</script>";
		echo "<script>window.location='viewappointmentpending.php';</script>";
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

<div style="margin-left:50px;">
 <form name="updateticket" id="updatecomplaint" method="post">  
<table  border="0" cellspacing="0" cellpadding="0">
	<tr>
      <td  >&nbsp;</td>

      <td >&nbsp;</td>
    </tr>

      <tr >
      <td><b>Right Eye DIS</b></td>
      <td><input placeholder="SPH" type="text" name="rightdis_sph" cols="50" rows="10" required="required"></input>
      <input placeholder="CYL" type="text" name="rightdis_cyl" cols="50" rows="10" required="required"></input>
      <input placeholder="AX" type="text" name="rightdis_ax" cols="50" rows="10" required="required"></input></td>
    </tr>

    <tr >
      <td><b>Right Eye RED</b></td>
      <td><input placeholder="SPH" type="text" name="rightred_sph" cols="50" rows="10" required="required"></input>
      <input placeholder="CYL" type="text" name="rightred_cyl" cols="50" rows="10" required="required"></input>
      <input placeholder="AX" type="text" name="rightred_ax" cols="50" rows="10" required="required"></input></td>
    </tr>

    <tr >
      <td><b>Left Eye DIS</b></td>
      <td><input placeholder="SPH" type="text" name="leftdis_sph" cols="50" rows="10" required="required"></input>
      <input placeholder="CYL" type="text" name="leftdis_cyl" cols="50" rows="10" required="required"></input>
      <input placeholder="AX" type="text" name="leftdis_ax" cols="50" rows="10" required="required"></input></td>
    </tr>

    <tr >
      <td><b>Left Eye RED</b></td>
      <td><input placeholder="SPH" type="text" name="leftred_sph" cols="50" rows="10" required="required"></input>
      <input placeholder="CYL" type="text" name="leftred_cyl" cols="50" rows="10" required="required"></input>
      <input placeholder="AX" type="text" name="leftred_ax" cols="50" rows="10" required="required"></input></td>
    </tr>
    
        <tr>
      <td><b>الاحداث</b></td>
      <td><input type="submit" name="insert"  class="btn btn-primary" value="تعديل"></td>
	    </tr>
 
</table>
 </form>
</div>

</body>
</html>

   