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
 $query = "SELECT * FROM admins WHERE id = :id";  
                $statement = $dbh->prepare($query); 
                $statement->bindParam(':id',$id);
                $statement->execute();
                $data = $statement->fetchAll($dbh::FETCH_ASSOC);  
?>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            EDIT ADMIN
                        </header>
                        <div class="panel-body">
                            <form action="updateadmin.php" class="form-horizontal bucket-form" method="post">
                                <input type="hidden" value="<?php echo $id?>" name="id">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="name" value="<?php echo $data[0]['name'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="email" value="<?php echo $data[0]['email'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Phone</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="phone" value="<?php echo $data[0]['phone'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="password" value="<?php echo $data[0]['password'];?>">
                                    </div>
                                </div>                               
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Role</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="role" value="<?php echo $data[0]['role'];?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Date</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="date" value="<?php echo $data[0]['date'];?>">
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