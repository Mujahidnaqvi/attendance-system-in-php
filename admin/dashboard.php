<?php 
//$qc=mysqli_query($con,"SELECT * FROM `product`");
//$product=mysqli_fetch_array($qc);
//$qd=mysqli_query($con,"SELECT * FROM `buyer`");
//$sales=mysqli_num_rows($qd);

 $query = "SELECT * FROM admins WHERE status =1";  
                $statement = $dbh->prepare($query);     
                $statement->execute();
                $data = $statement->fetchAll($dbh::FETCH_ASSOC);
                $count_active_admin = $statement->rowCount();

 $querya = "SELECT * FROM admins WHERE status =0";  
                $statement = $dbh->prepare($querya);     
                $statement->execute();
                $data = $statement->fetchAll($dbh::FETCH_ASSOC);
                $count_inactive_admin = $statement->rowCount();

 $queryb = "SELECT * FROM user WHERE status =0";  
                $statement = $dbh->prepare($queryb);     
                $statement->execute();
                $data = $statement->fetchAll($dbh::FETCH_ASSOC);
                $count_inactive_user = $statement->rowCount();

 $queryc = "SELECT * FROM user WHERE status =1";  
                $statement = $dbh->prepare($queryc);     
                $statement->execute();
                $data = $statement->fetchAll($dbh::FETCH_ASSOC);
                $count_active_user = $statement->rowCount();
?>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-6 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-briefcase"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Active Admins</h4>
<h3><?php echo $count_active_admin; ?></h3>
					<p></p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-lock" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Inactive Admins</h4>
<h3><?php echo $count_inactive_admin; ?></h3>
						<p></p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			
		</div>	
        
        <div class="col-md-6 market-update-gd" style="margin-top:100px;">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Active Users</h4>
						<h3><?php echo $count_active_user;?></h3>
						<p></p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
        
        <div class="col-md-6 market-update-gd" style="margin-top:100px;">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-user"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Inactive Users</h4>
						<h3><?php echo $count_inactive_user;?></h3>
						<p></p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
        
        
		<!-- //market-->
</section>