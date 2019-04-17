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
    <link rel="stylesheet" href="../assets/css/form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script type="text/javascript" src="../assets/js/time.js"></script>
    

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

                    <li><p id="time" style="font-size:14px; color:black; font-family:'Dancing script',cursive;display:inline-block;position:relative; margin-top:10px;"> </p> </li>
                    <li role="presentation"><a href="ordership.php"><strong> View Order </strong></a></li>
                    <li role="presentation"><a><strong><?php echo $_SESSION['uname'];?> </strong></a></li>
                    <li role="presentation"><a href="../logout.php"><strong>Logout </strong></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" id="welcome">
    <form method="post" action="newship.php" enctype="multipart/form-data">
		<ul id="wrapper">
					<div class="form-group">
						<label for="goods">Types Of Goods</label>
						<select class="form-control" id="goods" name="goods">
						<option value="">----Select----</option>
						<option value="electronics"> Electronics </option>
                        <option value="tv_apps"> TV & Appliances </option>
                        <option value="clothes"> Clothes </option>
                        <option value="home_fur"> Home & Furniture </option>
                        <option value="footwear"> Footwear </option>
                        <option value="F_L"> Flammable Liquids </option>
				        </select>
				<small id="productHelp" class="form-text text-muted">Select the type of product which is to be shipped.</small>
				</div>
			  
				<div class="form-group">
					<label for="name">Product Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter Product">
					<small id="emailHelp" class="form-text text-muted">Enter the type of product you want to transport.</small>
				 </div>
				 
				 <div class="form-group">
					<label for="quantity">Quantity</label>
					<input type="text" class="form-control" name="quantity" placeholder="Enter Quantity">
					<small id="emailHelp" class="form-text text-muted">Enter the quantity of product which is to be shipped.</small>
				 </div>
				 
				 
				<label for="Volume">Volume:</label>
				<div class="form-group">
					  <input type="text" class="form-control" name="length" placeholder="Enter Length">
					  <input type="text" class="form-control" name="breadth" placeholder="Enter Breadth">
					  <input type="text" class="form-control" name="height" placeholder="Enter Height">
				</div>
				 
				<div class="form-group">
					<label for="weight">Weight</label>
					<input type="text" name="weight" class="form-control" placeholder="Enter Weight">
					<small id="emailHelp" class="form-text text-muted">Enter the Weight of product which is to be shipped.</small>
				</div>
				<div class="form-group">
                    <label for="Address">Source Address</label>
                <textarea class="form-control" rows="3" placeholder="Enter full address"></textarea>
                </div>
				<div class="form-group">
                        <label for="Source">Source City</label>
                        <?php 
                            $qry = "SELECT `Source` FROM `cities`";
                            $run = mysqli_query($con, $qry);

                        ?>
						<select class="form-control" name="source" id="sr">
                        <option value="">----Select----</option>
                        <?php
                                while($sou=mysqli_fetch_assoc($run))
                                {
                                    
                            ?>
                                  <option value="<?php echo $sou['Source'] ?>"><?php echo $sou['Source'] ?></option>
                                  <?php } ?>
						</select>
						<small id="emailHelp" class="form-text text-muted">Select the Source city from where the shipment has to be get loaded.</small>
				</div>				
                <div class="form-group">
                    <label for="Address">Destination Address</label>
                <textarea class="form-control" rows="3" placeholder="Enter full address"></textarea>
                </div>
				 <div class="form-group">
                        <label for="Destination">Destination City</label>
                        <?php 
                            $qry = "SELECT `Destination` FROM `cities`";
                            $run = mysqli_query($con, $qry);

                        ?>
						<select class="form-control" name="dest" onchange="showUser(this.value)" id="dest">
                        <option value="">----Select----</option>
                        <?php
                                while($des=mysqli_fetch_assoc($run))
                                {
                                    
                            ?>
                                  <option value="<?php echo $des['Destination'] ?>"><?php echo $des['Destination'] ?></option>
                                  <?php } ?>
						</select>
						<small id="emailHelp" class="form-text text-muted">Select the destination city where the shipment has to be shipped.</small>
				</div>
				
				<div class="form-group">
						<label for="Vehicle">Type of Vehicle</label>
						<?php 
                            $query = "SELECT `id`, `Vehicle` FROM `typeofvehicle`";
                            $run2 = mysqli_query($con, $query);

                        ?>
						<select class="form-control" id="vehicle" name="vehicle">
							<option value="">----Select----</option>
								  <?php
                                while($vehi=mysqli_fetch_assoc($run2))
                                {
                                    
                            ?>
                            <option value="<?php echo $vehi['id'] ?>"> <?php echo $vehi['Vehicle'] ?> </option>
                                <?php } ?>
						</select>
						<small id="emailHelp" class="form-text text-muted">Select the type of vehicle which is to be used for shipment.</small>
				</div>
				
				
                <div class="form-group">
                    <label for="Time">Time</label>
                    <div class="input-group">
                    <input type="text" class="form-control" name="duration" placeholder="Total Time" id="time">
                    <div class="input-group-addon">Hours</div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputAmount">Total Cost</label>
                    <div class="input-group">
                    <div class="input-group-addon">&#x20B9;</div>
                    <input type="text" class="form-control" name ="amt" id="cost" placeholder="Amount" disabled>
                    <div class="input-group-addon">.00</div>
                    </div>
                </div>
				
			<div>
            </ul>
			<input type="submit" class="btn btn-success" value="submit" name="submit">
			<input type="reset" class="btn btn-danger" value="Cancel" name="cancel">
			</div>
			
		
	</form>

    </div>


    <?php
	if(isset($_POST['submit']))
	{	
       	$goods = $_POST['goods'];
		$name = $_POST['name'];
        $quantity = $_POST['quantity'];
        $len=$_POST['length'];
        $wid=$_POST['breadth'];
        $hei=$_POST['height'];
		$size = $len*$wid*$hei;
        $weight = $_POST['weight'];
        $source = $_POST['source'];
        $dest = $_POST['dest'];
        $vehicle = $_POST['vehicle'];
        $time = $_POST['time'];
        $amt = $_POST['amt'];
       
        $transaction_id = rand(1111111111, 9999999999);
		
        $qry = "INSERT INTO final(`TypeOfGood`, `ProductName`, `Quantity`, `Size`, `Weight`, `Source`, `Destination`, `TypeOfVehicle`, `Time`, `Amount`, `Transaction_Id`) VALUES ('$goods', '$name', '$quantity', '$size', '$weight', '$source', '$dest', '$vehicle', '$time', '$amt', '$transaction_id')";
        $exec = mysqli_query($con, $qry);
        
        $exec2;
        if($exec ==true)
        {
            $id1 = $_SESSION['uid'];
            $mysql2 = "INSERT INTO orders (`user_id`, `transaction_id`) VALUES ('$id1','$transaction_id')"; 
            $exec2 = mysqli_query($con, $mysql2);   
        }

		if($exec2 ==true)
		{
			?>
    <script>
        alert('Data Inserted Successfully !!');
        location.replace(newship.php?)
    </script>
        
    <?php
			

		}
	}
?>

    <!-- <footer style="background-color:lightblue;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footer-navigation">
                    <h3><a href="#">Goods Transport Company Website </a></h3>
                    <p class="links"><a href="../index.php">Home</a><strong> · </strong><a href="../about.php">About
                            us</a></p>
                    <p class="company-name">Gulshan Baraik © 2019 </p>
                </div>
                <div class="col-md-4 col-sm-6 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span">NIT Jamshedpur</span> Jharkhand, India</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left"> +91 790 3189580</p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> <a href="#" target="_blank">support@gtc.com</a></p>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-4 footer-about">
                    <h4>About the company</h4>
                    <p> Established by Gulshan and Anand in the year 2019.
                    </p>
                    <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></a><a href="#"><i
                                class="fa fa-github"></i></a></div>
                </div>
            </div>
        </div>
    </footer>
 -->
</body>
<script>
$(document).ready(function() {
    function getDist(){
        $sr=$('#sr').val();
        $dest=$('#dest').val();
        if($sr!="" && $dest!=""){
            //alert($sr);
            //alert($dest);
            $.ajax( {
                type: "POST",
                url: "test.php",
                data: { "source": $sr, "dest": $dest},			
                dataType: "html",   //expect html to be returned                
                success: function(response) {  
                    //$("ul.gn-menu").html(response); 
                   // alert(response);
                    $('#cost').val(response);
                    
                }
            });
        }
	}
	$('body').on('change', '#dest', function () {
        getDist();
	});
	$('body').on('change', '#sr', function () {
        getDist();
	});
});

$(document).ready(function() {
    function findTime(){
        $sr=$('#sr').val();
        $dest=$('#dest').val();
        if($sr!="" && $dest!=""){
            //alert($sr);
            //alert($dest);
            $.ajax( {
                type: "POST",
                url: "test2.php",
                data: { "source": $sr, "dest": $dest},			
                dataType: "html",   //expect html to be returned                
                success: function(response) {  
                    //$("ul.gn-menu").html(response); 
                   alert(response);
                    $('#duration').val(response);
                    
                }
            });
        }
	}
	$('body').on('change', '#dest', function () {
        findTime();
	});
	$('body').on('change', '#sr', function () {
        findTime();
	});
});
</script>
</html>