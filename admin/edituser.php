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
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
<?php
$count=1; 
     $query = "SELECT * FROM user ORDER BY `id` DESC";  
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
            <td><a href="edit_userinfo.php?id=<?php echo $value['id'];?>"><button class="btn btn-warning">EDIT <i class="fa fa-edit"></i></button></a></td>
            <td><a href="delete_userinfo.php?id=<?php echo $value['id'];?>" onclick="return confirm('Are you sure to delete data?');"><button class="btn btn-danger">DELETE <i class="fa fa-trash"></i></button></a></td>
          </tr>
<?php
$count++;
}
?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>