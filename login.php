<?php
  session_start();
  if(isset($_SESSION['uid']))
  {
	  header('location: user/userdash.php');
  }

?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<div class="box">
		<h2>Login</h2>
		<form action="login.php" method="post">
			<div class="inputbox">
				<input type="text" name="username" required>
				<label>Username</label>
			</div>
			<div class="inputbox">
				<input type="password" name="password" required>
				<label>Password</label>
			</div>
			<input type="submit" name="login" value="Login" style="font-size: 16px;">
			<label><strong><a href="registration.php" style="font-size:15px;color:red;">Register</a></strong></label>
		</form>
	</div>
</body>

</html>
<?php
 include('dbcon.php');
 error_reporting();
 if(isset($_POST['login']))
 {
	 $_SESSION['uname'] = $_POST['username'];
	 $password = $_POST['password'];
	 $qry="SELECT * FROM `user` WHERE `Name`='".$_SESSION['uname']."' AND `Password`='$password'";
	 $run=mysqli_query($con,$qry);
	 $row=mysqli_num_rows($run);
	 
	 if($row <1)
	 {
		?>
<script>
	alert('username and password are not match');
	window.open('login.php?', '_self');
	var userselect = confirm('Are you a new user Register first.');
	if (userselect == true) {
		location.replace('registration.php?')
	}
</script>
<?php
	 }
	 else
	 {
	$data = mysqli_fetch_assoc($run);
		 $id = $data['Id'];
		
		 
		 $_SESSION['uid'] = $id;
		 header('location: user/userdash.php');	 
	 }
  }
?>