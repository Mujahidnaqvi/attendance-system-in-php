<?php 
if(isset($_REQUEST['id'])){
include_once "links.php";
$id= $_REQUEST['id'];
//$q=mysqli_query($con,"DELETE FROM `admins` WHERE `id`='$id'");
    
$query = "DELETE FROM `admins` WHERE `id`= :id";
$add = $dbh->prepare($query);
$add->bindParam(':id',$id);
$add->execute();    
if($query){
header('Location:myprofile.php?del');
}
else{
header('Location:myprofile.php?delerror');
}
}
?>