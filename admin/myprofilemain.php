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
      All Admins
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
            <th>S.No</th>
            <th>Date</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>Status</th>
            <th>Role</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
<?php
$count=1; 
     $query = "SELECT * FROM admins ORDER BY `id` DESC";  
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
            <td><?php echo $value['email'];?></td>
            <td><?php echo $value['phone'];?></td>
            <td><?php echo $value['password'];?></td>
            <td><?php echo $value['status'];?></td>
            <td><?php echo $value['role'];?></td>
            <td><a href="edit_admin.php?id=<?php echo $value['id'];?>"><button class="btn btn-warning">EDIT <i class="fa fa-edit"></i></button></a></td>
            <td><a href="delete_admin.php?id=<?php echo $value['id'];?>" onclick="return confirm('Are you sure to delete data?');"><button class="btn btn-danger">DELETE <i class="fa fa-trash"></i></button></a></td>
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