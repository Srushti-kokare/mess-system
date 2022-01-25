<?php  
include ('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login_v4/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v4/css/main.css">
<!--===============================================================================================-->
	
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous"> -->
	<style>
		.image
		{
			
			margin: right;
		}

	</style>


</head>
<body>
	
	<div class="limiter">
		
		<div class="container-login100" style="background-image: url('Login_v4/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
			
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100"><b>Email<b></span>
						<input class="input100" type="email" name="email" placeholder="Email-id">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100"><b>Password<b></span>
							<div class="inter-group">
						<input class="input100" type="password" id="showpw" name="pass" placeholder="password">
						 
						<img src="download.png" id="image" height="15" width="15" onclick="showpww();">
					</div>
						
					<script type="text/javascript">
						function showpww()
						{
							var pw = document.getElementById('showpw');
							if (pw.type == "text")
							 pw.type = "password";
							else
								pw.type = "text";
						}
					</script>
					
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
<!-- 
	<input type="password" name="" id="showpw" placeholder="Enter password"><button onclick="showpw();"> -->
	<!-- <i class="fas fa-eye"></i></button> -->
					<br><br>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="log" type="submit"> 
								Login
							</button>
							
						</div>
					</div>

					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					</form>
<?php
	if (isset($_POST['log'])) {
		$Email=$_POST['email'];
		$Password=$_POST['pass'];
		$sql="SELECT * FROM tbl_registrations where email='".$Email."'AND password='".$Password."'";
		$result=mysqli_query($conn,$sql);
		if($row = mysqli_fetch_array($result))
		{
			$type=$row["type"];
			$_SESSION["user_id"]=$row["id"];
			$_SESSION["user_name"]=$row["user_name"];
			switch ($type) 
			{
				case"student":
							header("Location:student_dashboard.php"); break;
				case"admin":
					header("Location:admin_dashboard.php");break;
				case"super":
							header("Location:super_dashboard.php");break;
			}
		}
	}
?>	
			
<!--===============================================================================================-->
	<script src="Login_v4/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v4/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v4/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v4/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v4/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v4/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login_v4/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login_v4/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login_v4/js/main.js"></script>

</body>
</html>
