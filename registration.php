<?php
  session_start();
  if(isset($_SESSION['uid']))
  {
	  header('location:index.php');
  }
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<div class="box">
		<h2>Registration</h2>
		<form action="registration.php" method="post">
			<div class="inputbox">
				<input type="text" name="username" required>
				<label>Username</label>
			</div>
			<div class="inputbox">
				<input type="password" name="password" required>
				<label>Password</label>
			</div>
			<div class="inputbox">
				<input type="text" name="email" required>
				<label>Email</label>
			</div>
			
			<div class="inputbox">
				<input type="text" name="Mobile" required>
				<label>Mobile</label>
			</div>
			<input type="submit" name="register" value="Register" style="font-size: 16px;">
			<label><strong><a href="login.php?" style="font-size:15px;color:red;"> Login </a></strong></label>
		</form>
	</div>
</body>

</html>
<?php
 include('dbcon.php');
 error_reporting();
 if(isset($_POST['register']))
 {
	 $username = $_POST['username'];
	 $password = $_POST['password'];
	 $email = $_POST['email'];
	 $mobile=$_POST['Mobile'];
	 $qry="INSERT INTO `user`(`Name`, `Password`, `Email`, `Mobile`) VALUES ('$username','$password','$email','$mobile')";
     $run= mysqli_query($con,$qry);
	 
	 if($run==true)
   {
	   ?>
<script>
	alert("Registered Successfully.Now you can Login.");
	location.replace('login.php?')
</script>
<?php
   }
   } 
?>