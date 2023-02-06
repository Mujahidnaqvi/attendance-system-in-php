<?php
include_once "_includes/db.php";
if(isset($_POST['registration'])){    
$name = $_POST['name'];
$fname = $_POST['fname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$cnic = $_POST['cnic'];
$number = $_POST['number'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$date=date("d-m-Y");
$salary=0;
$service_time=0;
$break_time=0;
$relaxation_time=0;
$arrival_time=0;
$leaving_time=0;
$break_start_time=0;
$break_end_time=0;
$role=0;
$status=0;
if($password==$cpassword){
$query = "INSERT INTO `user` 
(`date`, `name`, `father_name`, `dob`, `gender`, `cnic`, `contact`, `salary`, `service_time`, `break_time`, `relaxation_time`, `arrival_time`, `leaving_time`, `break_start_time`, `break_end_time`, `username`, `password`, `confirm_password`, `role`, `status`) VALUES (:date,:name,:fname,:dob,:gender,:cnic,:number,:salary,:service_time,:break_time,:relaxation_time,:arrival_time,:leaving_time,:break_start_time,:break_end_time,:username,:password,:cpassword,:role,:status)";
$add = $dbh->prepare($query);
$add->bindParam(':date',$date);
$add->bindParam(':name',$name);
$add->bindParam(':fname',$fname);
$add->bindParam(':dob',$dob);
$add->bindParam(':gender',$gender);
$add->bindParam(':cnic',$cnic);
$add->bindParam(':number',$number);
$add->bindParam(':salary',$salary);
$add->bindParam(':service_time',$service_time);
$add->bindParam(':break_time',$break_time);
$add->bindParam(':relaxation_time',$relaxation_time);
$add->bindParam(':arrival_time',$arrival_time);
$add->bindParam(':leaving_time',$leaving_time);
$add->bindParam(':break_start_time',$break_start_time);
$add->bindParam(':break_end_time',$break_end_time);
$add->bindParam(':username',$username);
$add->bindParam(':password',$password);
$add->bindParam(':cpassword',$cpassword);
$add->bindParam(':role',$role);
$add->bindParam(':status',$status);
$add->execute();
}
else{
$url = 'register.html';
header("Refresh:0; url=" . $url);
echo "Password and Confirm Password not matched";    
}    
}
$url = 'index.html';
header("Refresh:0; url=" . $url);
?>