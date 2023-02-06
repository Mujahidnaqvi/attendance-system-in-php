<?php 
if(isset($_POST['edit'])){
include_once "links.php";
$id= $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$password= $_POST['password'];
$role= $_POST['role'];
$date= $_POST['date'];
$status= $_POST['status'];
//$q=mysqli_query($con,"UPDATE `admins` SET `name`='$name', `email`='$email', `phone`='$phone', `password`='$password', `role`='$role', `date`='$date', `status`='$status' WHERE `id`='$id'");

$query = "UPDATE `admins` SET `name`= :name, `email`= :email, `phone`= :phone, `password`= :password, `role`= :role, `date`= :date, `status`= :status WHERE `id`= :id";
$add = $dbh->prepare($query);
$add->bindParam(':name',$name);
$add->bindParam(':email',$email);
$add->bindParam(':phone',$phone);
$add->bindParam(':password',$password);
$add->bindParam(':role',$role);
$add->bindParam(':date',$date);
$add->bindParam(':status',$status);
$add->bindParam(':id',$id);
$add->execute();    
if($query){
header('Location:myprofile.php?updated');
}
else{
header('Location:myprofile.php?editerror');
}
}
?>