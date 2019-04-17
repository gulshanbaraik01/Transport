<?php
	session_start();
	
	if(isset($_POST['source']))
	{
		include('../dbcon.php');
		$sr=$_POST['source'];
		$dest=$_POST['dest'];
		$qry = "select Distance from cities where Source='$sr' and Destination='$dest'";
        $exec = mysqli_query($con, $qry);
		$row=mysqli_fetch_assoc($exec);
		echo $row["Distance"];
	}
	else
	{
		header('location: ../login.php');
	}
?>