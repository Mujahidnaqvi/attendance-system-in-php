<?php 
if(isset($_POST['edit'])){
include_once "links.php";
$id= $_POST['id'];    
$name = $_POST['name'];
$fname = $_POST['fname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$cnic = $_POST['cnic'];
$number = $_POST['number'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$date= $_POST['date'];
$salary= $_POST['salary'];
$service_time= $_POST['service_time'];
$break_time= $_POST['break_time'];
$relaxation_time= $_POST['relaxation_time'];
$arrival_time= $_POST['arrival_time'];
$leaving_time= $_POST['leaving_time'];
$break_start_time= $_POST['break_start_time'];
$break_end_time= $_POST['break_end_time'];
$role= $_POST['role'];
$status= $_POST['status'];
//$q=mysqli_query($con,"UPDATE `admins` SET `name`='$name', `email`='$email', `phone`='$phone', `password`='$password', `role`='$role', `date`='$date', `status`='$status' WHERE `id`='$id'");

$query = "UPDATE `user` SET `date`= :date, `name`= :name, `father_name`= :fname, `dob`= :dob, `gender`= :gender, `cnic`= :cnic, `contact`= :number, `salary`= :salary, `service_time`= :service_time, `break_time`= :break_time, `relaxation_time`= :relaxation_time, `arrival_time`= :arrival_time, `leaving_time`= :leaving_time, `break_start_time`= :break_start_time, `break_end_time`= :break_end_time, `username`= :username, `password`= :password, `confirm_password`= :cpassword, `role`= :role, `status`= :status WHERE `id`= :id";
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
$add->bindParam(':id',$id);
$add->execute();    
if($query){
header('Location:edit_user.php?updated');
}
else{
header('Location:edit_user.php?editerror');
}
}
?>