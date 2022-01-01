<?php 

$con=mysqli_connect('localhost','root');

if($con){
    echo "Connection Success";
}else{
    echo "No Connection";
}

mysqli_select_db($con,'ohmsphp');

$user=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comment=$_POST['message'];

$query="insert into contact (name,email,phone,message) values ('$user','$email','$phone','$comment')";

mysqli_query($con,$query);

header('location:index.php');

?>