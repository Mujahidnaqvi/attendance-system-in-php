<?php
session_start();
if($_SESSION["role"]==="user"){  
include_once "_includes/db.php";
include_once "link.php";
include_once "sidebar.php";
include_once "header.php";
date_default_timezone_set("Asia/Karachi");    
$current_time = date("H:i:sa");   
$current_time_tf = date("H");   
$current_hour = date("h");   
$current_minute = date("i");   
$current_second = date("s");   
$current_am_pm = date("a");   
?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
<?php
if(isset($_REQUEST['updated'])){
echo $update;
}
if(isset($_REQUEST['editerror'])){
echo $editerror;
}
if(isset($_REQUEST['delete'])){
echo $del;
}
?>
    <div class="panel-heading">
      All Users
    <?php
    var_dump($current_time);
        ?>
    </div>
    
    <div class="row w3-res-tb">
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>S.NO</th>
           <th>Date</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Date Of Birth</th>
            <th>Gender</th>
            <th>CNIC</th>
            <th>Contact</th>
            <th>Salary</th>
            <th>Service Time</th>
            <th>Break Time</th>
            <th>Relaxation Time</th>
            <th>Arrival Time</th>
            <th>Leaving Time</th>
            <th>Break Start Time</th>
            <th>Break End Time</th>
            <th>Username</th>
            <th>Password</th>
            <th>Confirm Password</th>
            <th>Role</th>
            <th>Status</th>
            <th>Action</th>
            <th>Working Status</th>
          </tr>
        </thead>
        <tbody>
<?php
$count=1; 
     $query = "SELECT * FROM user WHERE `status`='1' ORDER BY `id` DESC";  
                $statement = $dbh->prepare($query);     
                $statement->execute();
                $data = $statement->fetchAll($dbh::FETCH_ASSOC);    
    foreach($data as $value){
?>
<tr>
<td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td><?php echo $count;?></td>
            <td><?php echo $value['date'];?></td>
            <td><?php echo $value['name'];?></td>
            <td><?php echo $value['father_name'];?></td>
            <td><?php echo $value['dob'];?></td>
            <td><?php echo $value['gender'];?></td>
            <td><?php echo $value['cnic'];?></td>
            <td><?php echo $value['contact'];?></td>
            <td><?php echo $value['salary'];?></td>
            <td><?php echo $value['service_time'];?></td>
            <td><?php echo $value['break_time'];?></td>
            <td><?php echo $value['relaxation_time'];?></td>
            <td><?php echo $value['arrival_time'];?></td>
            <td><?php echo $value['leaving_time'];?></td>
            <td><?php echo $value['break_start_time'];?></td>
            <td><?php echo $value['break_end_time'];?></td>
            <td><?php echo $value['username'];?></td>
            <td><?php echo $value['password'];?></td>
            <td><?php echo $value['confirm_password'];?></td>
            <td><?php echo $value['role'];?></td>
            <td><?php echo $value['status'];?></td>
<?php    
    if($current_time_tf==$value['arrival_time']){
//        if($current_time_tf=$value['leaving_time']){
//        if($current_time_tf<=$value['relaxation_time']){
?>     
            <td><a href="edit_userinfo.php?id=<?php echo $value['id'];?>"><button class="btn btn-warning">Mark Attendance <i class="fa fa-edit"></i></button></a></td>
<?php
                                                     }
else{
?>    
    <td><a href=".php?id=<?php echo $value['id'];?>"><button class="btn btn-warning">It's not working time <i class="fa fa-edit"></i></button></a></td> 
<?php    
}                             
//                                                     }
//                                                     }
    if($current_time_tf==$value['break_time']){
        if($current_minute>=$value['break_start_time']){
        if($current_minute<=$value['break_end_time']){
?>        
            <td><a href="delete_userinfo.php?id=<?php echo $value['id'];?>"><button class="btn btn-danger">Go On Break <i class="fa fa-trash"></i></button></a></td>
 <?php
            }
            }
            }
        ?>    
            <td><?php echo $value['working_status'];?></td>
          </tr>
<?php
$count++;
}
}
else{  
      header("location:index.html");  
}   
?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
</section>    