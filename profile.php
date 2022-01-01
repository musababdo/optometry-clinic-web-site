<?php

include("header.php");
include("dbconnection.php");
session_start(); 
$id=$_SESSION[id];

if(isset($_POST['update'])){
    $name 	  = $_POST['name'];
    $phone 	  = $_POST['phone'];
    $password = $_POST['password'];
    $email 	  = $_POST['email'];
    $sql ="UPDATE login SET name='$name',password='$password',
           phone='$phone',email='$email' WHERE id = '$id'";
	$qsql = mysqli_query($con,$sql);
    echo "<script>alert('تم التعديل بنجاح');</script>";
    echo "<script>
        location.replace(\"profile.php\")
        </script>";
}

if(isset($_GET[delid])){
	// $sql ="DELETE FROM login WHERE id='$_GET[delid]'";
    $sql ="DELETE FROM login WHERE id = $id";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('تم الحذف بنجاح');</script>";
	}
    session_destroy();
    echo "<script>
        location.replace(\"index.php\")
        </script>";
}

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
                                    <h4>الصفحه الشخصيه</h4>
                                    
                                </div>
                                <?php 
                                $ssql ="select * from login where id='$id'";
								$res=mysqli_query($con, $ssql); 
								$row=mysqli_fetch_array($res);
                                ?>
                                <form method="post" action="" name="frmpatapp" onSubmit="return validateform()"
                                    class="appointment-form">
                                    <ul class="row">

                                    <li class="col-sm-6">
                                            <label>
                                                <input placeholder="اسم المستخدم" type="text" class="form-control"
                                                    name="name" id="name"
                                                    value="<?php echo $row['name'];  ?>">
                                                <i class="icon-user"></i>
                                            </label>
                                        </li>
                                        <li class="col-sm-6">
                                            <label>
                                                <input placeholder="كلمه المرور" type="text" class="form-control"
                                                    name="password" id="password"
                                                    value="<?php echo $row['password'];  ?>">
                                                <i class="icon-user"></i>
                                            </label>
                                        </li>

                                        <li class="col-sm-6">
                                            <label>
                                                <input placeholder="رقم الهاتف" type="text" class="form-control"
                                                    name="phone" id="phone"
                                                    value="<?php echo $row['phone'];  ?>">
                                                    <i class="icon-phone"></i>
                                            </label>
                                        </li>
                                        <li class="col-sm-6">
                                            <label>
                                                <input placeholder="البريد الالكتروني" type="text" class="form-control"
                                                    name="email" id="email"
                                                    value="<?php echo $row['email'];  ?>">
                                                    <i class="icon-send"></i>
                                            </label>

                                        </li>
                
                                        <li class="col-sm-12">
                                        <button type="submit" class="btn" name="update" id="update">تعديل</button>
                                            <?php echo "  <a href='profile.php?delid=$id' class='btn btn-sm btn-raised g-bg-blush2' onClick=\"javascript: return confirm('هل تود المسح ؟');\">حذف</a>"; ?>
                                        </li>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
        </div>
    </div>
</div>
</section>
</div>

<?php
include("footer.php");
?>