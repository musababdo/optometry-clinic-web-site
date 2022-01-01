<?php

if(isset($_GET['submit'])){
    $customer = $_GET['email'];
}

include("adheader.php");
include("dbconnection.php");


?>
<div class="container-fluid">
<div class="block-header">
        <h2 class="text-center"> إرسال رسالة </h2>
    </div>


<div class="card">
	<section class="container">
	<?php
if(isset($_POST['submit'])){
// for test arabic messages

    $too = $customer;
    $subjectt = 'تجربة الارسال';
    $messagee = "مرحبًا \n ";
    $messagee .= "سطر جديد \n ";
    $messagee .= "مرة أخرى، سطر جديد \n ";
    $senderrr = "From: مرسل تجريبي <no-reply@domain.com>\r\n";
    $senderrr .= "Content-type:text/plain; charset=utf-8\r\n";
    $senderrr .= "Reply-To: الدعم الفني <support@domain.com>";
    mail($too, $subjectt, $messagee, $senderrr);
    


    $to = $customer; // this is your Email address
    $from = "info@manalawooda.com"; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "وصول فريمات جديدة";
    $subject2 = "اون لاين ";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = " هنا نسخة رسالتك " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers .= "MIME-Version: 1.0\r\nContent-type: text/html; charset=UTF-8\r\n";
    $headers2 = "From:" . $to;
    $headers2 .= "MIME-Version: 1.0\r\nContent-type: text/html; charset=UTF-8\r\n";
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "<div class='alert alert-success'><h1>تم إرسال الرسالة " . $first_name . "    .</div></h1>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<form id="contact-form" method="post" action="" role="form">
    <div class="messages"></div>
    <div class="controls">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">الاسم الاول</label>
                    <input id="form_name" type="text" name="first_name" class="form-control" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">الاسم الاخير</label>
                    <input id="form_lastname" type="text" name="last_name" class="form-control"  required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_email">البريد الالكتروني</label>
                    <input id="form_email" type="email" name="email" class="form-control"  required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">الرسالة</label>
                    <textarea id="form_message" name="message" class="form-control" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
            <button type="submit" name="submit" class="btn btn-success btn-send"> إرسال<i class="fa fa-envelope"></i></button>
            </div>
        </div>
    </div>

</form>
	</section>

 </div>
</div>

<?php
include("adformfooter.php");
?>