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
                    <li role="presentation"><a href="newship.php"><strong> New Shipment </strong></a></li>
                    <li role="presentation"><a href="ordership.php"><strong> View Order </strong></a></li>
                    <li role="presentation"><a><strong><?php echo $_SESSION['uname'];?> </strong></a></li>
                    <li role="presentation"><a href="../logout.php"><strong>Logout </strong></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <div id="promo">
        <div class="jumbotron">
            <h1 style="font: normal 70px Cookie,cursive;">Welcome <strong><?php echo $_SESSION['uname'];?> </strong>
            </h1>
            <p>This dashboard is provided for you to add new shipment and view order.</p>
        </div>
    </div>
    <div class="container site-section" id="welcome">
        <h1 style="font: normal 50px Cookie,cursive; color:lightblue;">Welcome To Goods Transport Company</h1>
        <p style="color:lightblue;">You call, we haul, that's all.</p>
    </div>

    <footer style="background-color:lightblue;">
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
                                class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a
                            href="#"><i class="fa fa-github"></i></a></div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>