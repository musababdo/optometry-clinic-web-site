<?php include 'header.php';
error_reporting(0);
include("dbconnection.php");
$dt = date("Y-m-d");
$tim = date("H:i:s");
?>
<?php
error_reporting(0);  // using to hide undefine undex errors
session_start();
?>


<!-- Content -->
<div id="content">

    <!-- Intro -->
    <section class="p-t-b-150">
        <div class="container">
            <div class="intro-main">
                <div class="row">

                    <!-- Intro Detail -->
            <div class="col-md-8">
              <div class="text-sec">
                <h5>فحوصات الصحة</h5>
                <p>إلى جانب تقديم خدمات مختبرات للنظر عالمية المستوى ، يضم مركز منال عووضه مجموعة من الأطباء لخدمة المرضى المرضىة. جميعهم مشهورون ومحترمون في تخصصهم الطبية</p>
                <ul class="row">
                  <li class="col-sm-6">
                    <h6> <i class="lnr  lnr-checkmark-circle"></i> الأطباء المؤهلين</h6>
                    <p>يوجد في المركز مجموعه من الاطباء المؤهلين  </p>
                  </li>
                  <li class="col-sm-6">
                    <h6> <i class="lnr  lnr-checkmark-circle"></i> حجز عبر الإنترنت</h6>
                    <p>يمكنك الان ان تحجز عبر الانترنت بكل سهوله و يسر</p>
                  </li>
                  <li class="col-sm-6">
                    <h6> <i class="lnr  lnr-checkmark-circle"></i> استشارة طبية مجانية</h6>
                    <p>يوجد لدينا قسم للاستشارات الططبيه م عليك سوي ان تتواصل معنا </p>
                  </li>
                </ul>
              </div>
            </div>

                    <!-- Intro Timing -->
                    <div class="col-md-5"> <img class="img-responsive intro-img" src="images/intro-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section class="p-t-b-150"> 
      <!-- CONTACT FORM -->
      <div class="container"> 
        <!-- Tittle -->
        <div class="heading-block">
          <h4>ابقى على تواصل</h4>
          <hr>
          <span>للتواصل مع اداره المركز الرجاء ادخال البيانات التاليه</span> </div>
        <div class="contact">
          <div class="contact-form"> 
            <!-- FORM  -->
            <form role="form" id="contact_form" action="userinfo.php" method="post" class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="الاسم">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="البريد الالكتروني">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="رقم الهاتف">
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="row">
                    <li class="col-sm-12">
                      <label>
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="نص الرساله"></textarea>
                      </label>
                    </li>
                    <li class="col-sm-12 no-margin">
                      <button type="submit" value="submit" class="btn" id="btn_submit">ارسال</button>
                    </li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    <script>
      function showAlert(){
  if($("#myAlert").find("div#myAlert2").length==0){
    $("#myAlert").append("<div class='alert alert-success alert-dismissable' id='myAlert2'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> Success! message sent successfully.</div>");
  }
  $("#myAlert").css("display", "");
}
    </script>

<div class="container" style="display:none;" id="myAlert">
        <div class="alert alert-success alert-dismissable" id="myAlert2">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            تم الارسال بنجاح
        </div>

    </div>

</div>

<!-- Footer -->
<!--======= FOOTER =========-->

<?php include 'footer.php';?>