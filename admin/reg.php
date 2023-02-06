<?php 
if(isset($_POST['register'])){
include_once "link.php";
$name = mysqli_real_escape_string($con,$_POST['Name']);
$email = mysqli_real_escape_string($con,$_POST['Email']);
$phone = mysqli_real_escape_string($con,$_POST['Phone']);
$password = mysqli_real_escape_string($con,$_POST['Password']);
$date=date('d-m-Y');
$status=0;
$q=mysqli_query($con,"INSERT INTO admins (`date`, `name`, `email`, `phone`, `password`, `status`) VALUES('$date','$name','$email','$phone','$password','$status')");
if($q){
header('Location:index.php?success');
}
else{
header('Location:registration.php?error');
}
}
?>