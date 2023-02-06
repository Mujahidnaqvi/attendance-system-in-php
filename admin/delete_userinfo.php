<?php 
if(isset($_REQUEST['id'])){
include_once "links.php";
$id= $_REQUEST['id'];
//$q=mysqli_query($con,"DELETE FROM `admins` WHERE `id`='$id'");
    
$query = "DELETE FROM `user` WHERE `id`= :id";
$add = $dbh->prepare($query);
$add->bindParam(':id',$id);
$add->execute();    
if($query){
header('Location:edit_user.php?del');
}
else{
header('Location:edit_user.php?delerror');
}
}
?>