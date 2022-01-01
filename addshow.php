<?php
include("adheader.php");
include("dbconnection.php");
if(isset($_POST[submit]))
{
	if(isset($_GET[editid])){
		$name  = $_POST['name'];
        $price = $_POST['price'];
        $filename = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];    
        $folder = 'uploads/'.$_FILES['image']['name'];
		if(empty($filename)){
			echo "<div class='alert alert-warning'>الرجاء اختيار صوره</div>";
		 }else{
		$sql ="UPDATE theshow SET name='$name',price='$price',image='$filename' WHERE id='$_GET[editid]'";
		mysqli_query($con,$sql);
        move_uploaded_file($_FILES['image']['tmp_name'], "$folder");
        echo "<script>alert('تم التعديل بنجاح');</script>";
        echo "<script>
        location.replace(\"viewshow.php\")
        </script>";
		 }
	}else{
                 $name  = $_POST['name'];
                 $price = $_POST['price'];
                 $filename = $_FILES['image']['name'];
                 $tempname = $_FILES['image']['tmp_name'];    
                 $folder = 'uploads/'.$_FILES['image']['name'];

				 if(empty($filename)){
					echo "<div class='alert alert-warning'>الرجاء اختيار صوره</div>";
				 }else{
					$query = "INSERT INTO theshow(name,price,image) values('$name','$price','$filename')";
					mysqli_query($con,$query);
					move_uploaded_file($_FILES['image']['tmp_name'], "$folder");
					echo "<script>alert('تم الحفظ بنجاح');</script>";
					echo "<script>
					location.replace(\"addshow.php\")
					</script>";
				 }
            
	}
}
if(isset($_GET[editid]))
{
	$sql="SELECT * FROM theshow WHERE id='$_GET[editid]' ";
	$qsql = mysqli_query($con,$sql);
	$rsedit = mysqli_fetch_array($qsql);
	
}
?>

<div class="container-fluid">
	<div class="block-header">
		<h2 class="text-center"> اضافه فريم جديد</h2>
	</div>
	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">

				<form method="post" action="" name="frmadminprofile" onSubmit="return validateform()" enctype="multipart/form-data">


					<div class="body">
						<div class="row clearfix">
							<div class="col-sm-12">   
								<div class="form-group">
									<label>اسم الفريم</label>
									<div class="form-line">
										<input type="text" class="form-control"  name="name" id="name" value="<?php echo $rsedit[name]; ?>"/>
									</div>
								</div>

							</div>	

						</div>
					 
						<div class="row clearfix"> 
							<div class="col-sm-12">                              
								<div class="form-group">
									<label>السعر</label>
									<div class="form-line">
										<input type="number" class="form-control"  name="price" id="price" value="<?php echo $rsedit[price]; ?>"/>
									</div>
								</div>
							</div>                          
						</div> 
						<div class="row clearfix"> 
							<div class="col-sm-12">                              
								<div class="form-group">
									<label>أضافه صوره</label>
									<div class="file-field input-field">
						              <div class="btn">
						                <span>File</span>
                                        <input type='file' name="image" value="" onchange="readURL(this);" />
                                        <img id="blah" name="blah" src="#" />
						                </div>
						               </div>
								</div>
							</div>                          
						</div>
                        <!-- <input type="file" name="image" value=""/>  -->
						<div class="col-sm-12">
							<input type="submit" class="btn btn-raised g-bg-cyan" name="submit" id="submit" value="حفظ" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

				<?php	include("adfooter.php");?>
                <script>
                    function readURL(input) {
                     if (input.files && input.files[0]) {
                      var reader = new FileReader();
                      reader.onload = function (e) {
                      $('#blah')
                      .attr('src', e.target.result)
                      .width(150)
                      .height(200);
                   };
                reader.readAsDataURL(input.files[0]);
             }
         }
                </script>
				<script type="application/javascript">
var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

function validateform()
{
	if(document.frmadmin.adminname.value == "")
	{
		alert("Admin name should not be empty..");
		document.frmadmin.adminname.focus();
		return false;
	}
	else if(!document.frmadmin.adminname.value.match(alphaspaceExp))
	{
		alert("Admin name not valid..");
		document.frmadmin.adminname.focus();
		return false;
	}
	else if(document.frmadmin.loginid.value == "")
	{
		alert("Login ID should not be empty..");
		document.frmadmin.loginid.focus();
		return false;
	}
	else if(!document.frmadmin.loginid.value.match(alphanumericExp))
	{
		alert("Login ID not valid..");
		document.frmadmin.loginid.focus();
		return false;
	}
	else if(document.frmadmin.password.value == "")
	{
		alert("Password should not be empty..");
		document.frmadmin.password.focus();
		return false;
	}
	else if(document.frmadmin.password.value.length < 8)
	{
		alert("Password length should be more than 8 characters...");
		document.frmadmin.password.focus();
		return false;
	}
	else if(document.frmadmin.password.value != document.frmadmin.cnfirmpassword.value )
	{
		alert("Password and confirm password should be equal..");
		document.frmadmin.password.focus();
		return false;
	}
	else if(document.frmadmin.select.value == "" )
	{
		alert("Kindly select the status..");
		document.frmadmin.select.focus();
		return false;
	}
	else
	{
		return true;
	}
}
</script>