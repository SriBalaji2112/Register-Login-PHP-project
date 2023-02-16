<?php
	include_once('dbFunction.php');
	$funObj = new dbFunction();
	if(isset($_POST['login'])){
		$emailid = $_POST['emailid'];
		$password = $_POST['password'];
		$user = $funObj->Login($emailid, $password);

		if ($user){
			header("location:mainpages/home.php");
		}
		else{
			echo "<script>alert('Emailid / Password Not match')</script>";
		}
	}
	if(isset($_POST['register'])){
		$username = $_POST['username'];
		$emailid = $_POST['emailid'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['conformpassword'];
		if($password == $confirmPassword){
			$email = $funObj->isUserExist($emailid);
			if(!$email){
				$register = $funObj->UserRegister($username, $emailid, $password);
				if($register){
					echo "<script>alter('Register Successful')</script>";
				}
				else{
					echo "<script>alter('Register Not successful')</script>";
				}
			}
			else{
				echo "<script>alter('Email ID Already Exist')</script>";
			}
		}
		else{
			echo "<script>alter('Confirm password mismatched')</script>";
		}
	}
?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>SMVEC.</h1>
		<p>Sri Manakula Vinayagar Engineering College is one of the best engineering colleges in Puducherry affiliated to Pondicherry University.</p>
		<span>
			<p>login with social media</p>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter</a>
		</span>
		</div>s
	</div>
	
	
		<div class="right">
		<h5>Login</h5>
		<p>Don't have an account? <a href="register/index.php">Creat Your Account</a> it takes less than a minute</p>
		<form name="login" method="post" action="">
			<div class="inputs">
				<input type="text" placeholder="Email/UserName" name='emailid' >
				<br>
				<input type="password" placeholder="Password" name='password'>
			</div>
				
				<br><br>
				
			<div class="remember-me--forget-password">
					<!-- Angular -->
		<label>
			<input type="checkbox" name="item" checked/>
			<span class="text-checkbox">Remember me</span>
		</label>
				<p>forget password?</p>
			</div>
				
				<br>
				<input type="submit" name="login" value="Login">
		</form>
	</div>
	
</div>
<!-- partial -->
  
</body>
</html>
