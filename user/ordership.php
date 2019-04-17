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
    include('../dbcon.php');
?>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/Pretty-Footer.css">
    <script src="script.js"></script>
    
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:lightyellow;">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="../index.php"><img src="../assets/img/logo.jpg"
                        id="logo"><strong> GTC </strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php if(isset($_SESSION['uid'])){ ?>
                        
                        <li role="presentation"><a href="newship.php?"><strong> New Shipment </strong></a></li>
                    <li role="presentation"><a><strong><?php echo $_SESSION['uname'];?> </strong></a></li>
                    <li role="presentation"><a href="../logout.php"><strong>Logout </strong></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container site-section" id="welcome">
  
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">User Name</th>
      <th scope="col">Transaction ID</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php 
        $id=$_SESSION['uid'];
        $mysql="SELECT * from orders where user_id='$id'";
        $run=mysqli_query($con,$mysql);
        $count=0;
        while($orders=mysqli_fetch_assoc($run))
		{
            $count++;
      ?>
    <tr>
      <th scope="row"><?php echo $count ?></th>
      <td><?php echo $_SESSION['uname'] ?></td>
      <td><?php echo $orders['transaction_id'] ?></td>
      <td><a href="order.php"><input type="submit" value="View" class="btn btn-success"></a></td>
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>
	
	<?php
	
?>
</table>

    </div>
    </body>
</html>