<div class="reg-w3">
<div class="w3layouts-main">
<?php
if(isset($_REQUEST['error'])){
echo $rger;
}	
?>
<h2>Register Now</h2>
<form action="reg.php" method="post">
<input type="text" class="ggg" name="Name" placeholder="NAME" required autocomplete="off">
			<input type="email" class="ggg" name="Email" placeholder="E-MAIL" required autocomplete="off">
			<input type="text" class="ggg" name="Phone" placeholder="PHONE" required autocomplete="off">
			<input type="password" class="ggg" name="Password" placeholder="PASSWORD" required autocomplete="off">
			<h4><input type="checkbox" required/>I agree to the Terms of Service and Privacy Policy</h4>
				<div class="clearfix"></div>
				<input type="submit" value="submit" name="register">
</form>
<p>Already Registered.<a href="login.html">Login</a></p>
</div>
</div>
