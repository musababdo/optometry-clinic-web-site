<?php

include("adheader.php");
include("dbconnection.php");
if(isset($_GET[delid]))
{
	$sql ="DELETE FROM appointment WHERE id='$_GET[delid]'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('تم الحذف بنجاح');</script>";
	}
}
// if(isset($_GET[editid]))
// {
// 	// $sql ="UPDATE patient SET status='Active' WHERE patientid='$_GET[patientid]'";
// 	// $qsql=mysqli_query($con,$sql);
	
// 	$sql ="UPDATE appointment SET status='Approved' WHERE id='$_GET[editid]'";
// 	$qsql=mysqli_query($con,$sql);
// 	if(mysqli_affected_rows($con) == 1)
// 	{
// 		echo "<script>alert('تم التعديل بنجاح');</script>";
// 		echo "<script>window.location='viewappointmentpending.php';</script>";
// 	}	
// }
?>
<div class="container-fluid">
<div class="block-header">
        <h2 class="text-center">عرض كل الحجوزات</h2>
    </div>


<div class="card">
	<section class="container">
		<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
			<thead>

				<tr>

				    <th>اسم المريض</th>
					<th>رقم الهاتف</th>
					<th>البريد الالكتروني</th>
					<th>تاريخ و زمن الحجز</th>
					<th>سبب الحجز</th>
					<th width="15%">الاجراء</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql ="SELECT * FROM vname";
				// if(isset($_SESSION[patientid]))
				// {
				// 	$sql  = $sql . " AND patientid='$_SESSION[patientid]'";
				// }
				$qsql = mysqli_query($con,$sql);
				while($rs = mysqli_fetch_array($qsql))
				{
					// $sqlpat = "SELECT * FROM patient WHERE patientid='$rs[patientid]'";
					// $qsqlpat = mysqli_query($con,$sqlpat);
					// $rspat = mysqli_fetch_array($qsqlpat);


					// $sqldept = "SELECT * FROM department WHERE departmentid='$rs[departmentid]'";
					// $qsqldept = mysqli_query($con,$sqldept);
					// $rsdept = mysqli_fetch_array($qsqldept);

					// $sqldoc= "SELECT * FROM doctor WHERE doctorid='$rs[doctorid]'";
					// $qsqldoc = mysqli_query($con,$sqldoc);
					// $rsdoc = mysqli_fetch_array($qsqldoc);
					echo "<tr>

					<td>&nbsp;$rs[name]</td>		 
					<td>&nbsp;$rs[phone]</td>
					<td><a href='send_message.php?email=$rs[email]'>&nbsp;$rs[email]</a></td>
					<td>&nbsp;" . date("d-M-Y",strtotime($rs[appointmentdate])) . " &nbsp; " . date("H:i A",strtotime($rs[appointmenttime])) . "</td> 
					<td>&nbsp;$rs[app_reason]</td>
					<td>";
					echo "<a href='order_update.php?edit=$rs[id]' class='btn btn-sm btn-raised g-bg-cyan'>تعديل</a>";
					echo "  <a href='viewappointmentpending.php?delid=$rs[id]' class='btn btn-sm btn-raised g-bg-blush2' onClick=\"javascript: return confirm('هل تود المسح ؟');\">حذف</a>";
					echo "<a href='order_details.php?details=$rs[id]' class='btn btn-sm btn-raised g-bg-cyan'>تفاصيل الحجز</a>";
					echo "</td></tr>";
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