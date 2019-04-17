<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		echo "";
	}
	else
	{
		header('location: ../login.php');
	}
?>
<?php
	include('header.php');
?>
	<div class="admintitle" align="center">
		<img src = "36.jpg" style="margin-left:30px; float:left ; margin-top: 30px; width:80px; height:80px; border-radius: 20px;">
		<h4 color="white"> <a href="logout.php" style="float: right; margin-right: 30px; color: white; font-size: 20px;">Logout</a> </h4>
		<h1 style="color: white;"> Welcome to Admin Dashboard </h1>
		
	</div>
	
	<div class="dashboard" align="center">
		<table border="2" style="width: 50%; border-color: white;" align="center">
			<tr align="center">
				<td> 1. </td><td><a href="addstudent.php"> Insert Student Details </a></td>
			</tr>
			<tr align="center">
				<td> 2. </td><td><a href="updatestudent.php"> Update Student Details </a></td>
			</tr>
			<tr align="center">
				<td> 3. </td><td><a href="deletestudent.php"> Delete Student Details </a></td>
			</tr>
			<tr align="center">
				<td> 4. </td><td><a href="changeadmin.php"> Change Admin Details </a></td>
			</tr>
		</table>
	</div>
</body>
</html>