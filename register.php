<?php

include("header.php");
include("dbconnection.php");
$_SESSION['id']=$row['id'];
if(isset($_POST[submit]))
{
	$sql ="INSERT INTO login(name,password,phone,email) values
        ('$_POST[name]','$_POST[password]','$_POST[phone]','$_POST[email]')";
		if($qsql = mysqli_query($con,$sql))
		{
			echo "<script>alert('تم الحفظ بنجاح');</script>";
            echo "<script>
        location.replace(\"index.php\")
        </script>";
		}
		else
		{
			echo mysqli_error($con);
		}
}
if(isset($_GET[editid]))
{
	$sql="SELECT * FROM login";
	$qsql = mysqli_query($con,$sql);
	$rsedit = mysqli_fetch_array($qsql);
	
}
if(isset($_SESSION[patientid]))
{
    // $sqlpatient = "SELECT * FROM patient WHERE patientid='$_SESSION[patientid]' ";
    // $qsqlpatient = mysqli_query($con,$sqlpatient);
    // $rspatient = mysqli_fetch_array($qsqlpatient);
    // $readonly = " readonly";
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="wrapper col4">
    <div id="container">

        <?php
        if(isset($_POST[submit]))
        {
           if(mysqli_num_rows($qsqlappointment) >= 1)
           {		
             echo "<h2>Appointment already scheduled for ". date("d-M-Y", strtotime($_POST[appointmentdate])) . " " . date("H:i A", strtotime($_POST[appointmenttime])) . " .. </h2>";
         }
         else
         {
          if(isset($_SESSION[patientid]))
          {
             echo "<h2 class='text-center'>تم الحفظ بنجاح </h2>";
            //  echo "<p class='text-center'>Appointment record is in pending process. Kinldy check the appointment status. </p>";
            //  echo "<p class='text-center'> <a href='viewappointment.php'>View Appointment record</a>. </p>";			
         }
         else
         {
             echo "<h2 class='text-center'تم الحفظ بنجاح</h2>";
            //  echo "<p class='text-center'>Appointment record is in pending process. Please wait for confirmation message.. </p>";
            //  echo "<p class='text-center'> <a href='patientlogin.php'>Click here to Login</a>. </p>";	
         }
     }
 }
 else
 {
   ?>
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
                                    <h4>انشئ حسابك الان</h4>
                                    
                                </div>
                                <form method="post" action="" name="frmpatapp" onSubmit="return validateform()"
                                    class="appointment-form">
                                    <ul class="row">

                                    <li class="col-sm-6">
                                            <label>


                                                <input placeholder="اسم المستخدم" type="text" class="form-control"
                                                    name="name" id="name"
                                                    value="<?php echo $rspatient[name];  ?>"
                                                    <?php echo $readonly; ?>>
                                                <i class="icon-user"></i>
                                            </label>

                                        </li>

                                        <li class="col-sm-6">
                                            <label>


                                                <input placeholder="كلمه المرور" type="text" class="form-control"
                                                    name="password" id="password"
                                                    value="<?php echo $rspatient[password];  ?>"
                                                    <?php echo $readonly; ?>>
                                                <i class="icon-user"></i>
                                            </label>

                                        </li>

                                        <li class="col-sm-6">
                                            <label>
                                                <input placeholder="رقم الهاتف" type="text" class="form-control"
                                                    name="phone" id="phone"
                                                    value="<?php echo $rspatient[phone];  ?>"
                                                    <?php echo $readonly; ?>><i class="icon-phone"></i>
                                            </label>

                                        </li>

                                        <li class="col-sm-6">
                                            <label>
                                                <input placeholder="البريد الالكتروني" type="text" class="form-control"
                                                    name="email" id="email"
                                                    value="<?php echo $rspatient[email];  ?>"
                                                    <?php echo $readonly; ?>><i class="icon-send"></i>
                                            </label>

                                        </li>
                
                                        <li class="col-sm-12">
                                            <button type="submit" class="btn" name="submit" id="submit">حفظ</button>
                                        </li>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
}
?>

        </div>
    </div>
</div>
</section>
</div>

<?php
include("footer.php");
?>
<script type="application/javascript">
var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

function validateform() {
    if (document.frmpatapp.patiente.value == "") {
        alert("Patient name should not be empty..");
        document.frmpatapp.patiente.focus();
        return false;
    } else if (!document.frmpatapp.patiente.value.match(alphaspaceExp)) {
        alert("Patient name not valid..");
        document.frmpatapp.patiente.focus();
        return false;
    } else if (document.frmpatapp.textarea.value == "") {
        alert("Address should not be empty..");
        document.frmpatapp.textarea.focus();
        return false;
    } else if (document.frmpatapp.city.value == "") {
        alert("City should not be empty..");
        document.frmpatapp.city.focus();
        return false;
    } else if (!document.frmpatapp.city.value.match(alphaspaceExp)) {
        alert("City name not valid..");
        document.frmpatapp.city.focus();
        return false;
    } else if (document.frmpatapp.mobileno.value == "") {
        alert("Mobile number should not be empty..");
        document.frmpatapp.mobileno.focus();
        return false;
    } else if (!document.frmpatapp.mobileno.value.match(numericExpression)) {
        alert("Mobile number not valid..");
        document.frmpatapp.mobileno.focus();
        return false;
    } else if (document.frmpatapp.loginid.value == "") {
        alert("login ID should not be empty..");
        document.frmpatapp.loginid.focus();
        return false;
    } else if (!document.frmpatapp.loginid.value.match(alphanumericExp)) {
        alert("login ID not valid..");
        document.frmpatapp.loginid.focus();
        return false;
    } else if (document.frmpatapp.password.value == "") {
        alert("Password should not be empty..");
        document.frmpatapp.password.focus();
        return false;
    } else if (document.frmpatapp.password.value.length < 8) {
        alert("Password length should be more than 8 characters...");
        document.frmpatapp.password.focus();
        return false;
    } else if (document.frmpatapp.select6.value == "") {
        alert("Gender should not be empty..");
        document.frmpatapp.select6.focus();
        return false;
    } else if (document.frmpatapp.dob.value == "") {
        alert("Date Of Birth should not be empty..");
        document.frmpatapp.dob.focus();
        return false;
    } else if (document.frmpatapp.appointmentdate.value == "") {
        alert("Appointment date should not be empty..");
        document.frmpatapp.appointmentdate.focus();
        return false;
    } else if (document.frmpatapp.appointmenttime.value == "") {
        alert("Appointment time should not be empty..");
        document.frmpatapp.appointmenttime.focus();
        return false;
    } else {
        return true;
    }
}

function loaddoctor(deptid) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("divdoc").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "departmentDoctor.php?deptid=" + deptid, true);
    xmlhttp.send();
}
</script>