<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
            <?php 
$id=$_REQUEST['id'];    
 $query = "SELECT * FROM user WHERE id = :id";  
                $statement = $dbh->prepare($query); 
                $statement->bindParam(':id',$id);
                $statement->execute();
                $data = $statement->fetchAll($dbh::FETCH_ASSOC);  
?>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            EDIT USER
                        </header>
                        <div class="panel-body">
                            <form action="updateuser.php" class="form-horizontal bucket-form" method="post">
                                <input type="hidden" value="<?php echo $id?>" name="id">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Date Of Registration</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="date" value="<?php echo $data[0]['date'];?>">
                                    </div>
                                </div>  <div class="form-group">
                                    <label class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="name" value="<?php echo $data[0]['name'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Father Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="fname" value="<?php echo $data[0]['father_name'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Date Of Birth</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="dob" value="<?php echo $data[0]['dob'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Gender</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="gender" value="<?php echo $data[0]['gender'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">CNIC</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="cnic" value="<?php echo $data[0]['cnic'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Contact</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="number" value="<?php echo $data[0]['contact'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Salary</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="salary" value="<?php echo $data[0]['salary'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Service Time</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="service_time" value="<?php echo $data[0]['service_time'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Break Time</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="break_time" value="<?php echo $data[0]['break_time'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Relaxation Time</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="relaxation_time" value="<?php echo $data[0]['relaxation_time'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Arrival Time</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="arrival_time" value="<?php echo $data[0]['arrival_time'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Leaving Time</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="leaving_time" value="<?php echo $data[0]['leaving_time'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Break Start Time</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="break_start_time" value="<?php echo $data[0]['break_start_time'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Break End Time</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="break_end_time" value="<?php echo $data[0]['break_end_time'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Username</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="username" value="<?php echo $data[0]['username'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="password" value="<?php echo $data[0]['password'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Confirm Password</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="cpassword" value="<?php echo $data[0]['confirm_password'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Role</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="role" value="<?php echo $data[0]['role'];?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Status</label>
                                    <div class="col-sm-6">
                                        <input type="radio" name="status" <?php if($data[0]['status']=="1"){echo "checked";}?> value="1">Active
                                        <input type="radio" name="status" <?php if($data[0]['status']=="0"){echo "checked";}?> value="0">Inactive
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"></label>
                                    <div class="col-sm-6">
                                        <input type="submit" class="form-control btn btn-success" value="UPDATE DATA" name="edit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>
    </section>