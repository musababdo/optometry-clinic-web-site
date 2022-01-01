<?php
include("adheader.php");
include("dbconnection.php");
if(isset($_GET[delid]))
{
	$sql ="DELETE FROM admin WHERE adminid='$_GET[delid]'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('تم حذف المسؤول بنجاح');</script>";
	}
}
?>

<div class="container-fluid">
<div class="block-header">
		<h2 class="text-center"> عرض الكل </h2>
	</div>
</div>
<div class="card">
  <section class="container">
   <table class="table table-bordered table-striped table-hover js-basic-example dataTable">


    <thead>
      <tr>
        <td width="12%" height="40">اسم المسؤول</td>
        <td width="12%">كلمه المرور</td>
        <td width="10%">الاحداث</td>
      </tr>
    </thead>
    <tbody>
     <?php
     $sql ="SELECT * FROM admin";
     $qsql = mysqli_query($con,$sql);
     while($rs = mysqli_fetch_array($qsql))
     {
      echo "<tr>
      <td>$rs[username]</td>
      <td>$rs[password]</td>
      <td>
      <a href='admin.php?editid=$rs[adminid]' class='btn btn-raised g-bg-cyan'>تعديل</a> <a href='viewadmin.php?delid=$rs[adminid]' class='btn btn-raised g-bg-blush2' onClick=\"javascript: return confirm('هل تود المسح ؟');\">حذف</a> </td>
      </tr>";
    }
    ?>
  </tbody>
</table>
</section>

</div>
</div>



<?php
include("adformfooter.php");
?>