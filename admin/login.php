<div class="log-w3">
<div class="w3layouts-main">
<?php
if(isset($_REQUEST['success'])){
echo $rgsc;
}
if(isset($_REQUEST['plog'])){
echo $plog;
}
?>
<h2>Sign In Now</h2>
<form action="log.php" method="post">
			<input type="email" class="ggg" name="Email" placeholder="E-MAIL" required autocomplete="off">
			<input type="password" class="ggg" name="Password" placeholder="PASSWORD" required autocomplete="off">
			<span><input type="checkbox" />Remember Me</span>
			<h6><a href="#">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
</form>
<p>Don't Have an Account ?<a href="registration.php">Create an account</a></p>
</div>
</div>