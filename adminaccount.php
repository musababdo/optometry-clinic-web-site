<?php
include("adheader.php");
include("dbconnection.php");

    session_start();
    if(!isset($_SESSION[adminid])){
        echo "<script>window.location='adminlogin.php';</script>";
    }
    if(!isset($_SESSION[adminid])){
        echo "<script>window.location='adminlogin.php';</script>";
    }

?>


<div class="container-fluid">
    <div class="block-header">
        <h2>لوحه التحكم</h2>
        <small class="text-muted">مرحبا بك في لوحه التحكم</small>
    </div>

    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-male-female col-blush"></i> </div>
                <div class="content">
                    <div class="text">إجمالي المرضي</div>
                    <div class="number">
                        <?php
                        $sql = "SELECT * FROM appointment";
                        $qsql = mysqli_query($con,$sql);
                        echo mysqli_num_rows($qsql);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-account-box-mail col-blue"></i> </div>
                <div class="content">
                    <div class="text">إجمالي المسؤولين</div>
                    <div class="number">
                        <?php
                        $sql = "SELECT * FROM admin";
                        $qsql = mysqli_query($con,$sql);
                        echo mysqli_num_rows($qsql);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-money col-green"></i> </div>
                <div class="content">
                    <div class="text">أرباح المركز</div>
                    <div class="number">SDG 
                        <?php 
              $sql = "SELECT sum(bill_amount) as total  FROM `billing_records` ";
              $qsql = mysqli_query($con,$sql);
              while ($row = mysqli_fetch_assoc($qsql))
              { 
               echo $row['total'];
             }
              ?>
                    </div>
                </div>
            </div>
        </div> -->
    </div>


   

    <div class="clear"></div>
</div>
</div>
<?php
include("adfooter.php");
?>
