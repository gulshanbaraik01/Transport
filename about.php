<?php
 session_start();
include('dbcon.php');
if (isset($_SESSION['uid']))
{
	
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/style3.css">
    <!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

</head>


<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="index.php"><img src="assets/img/logo.jpg"
                        id="logo"><strong> GTC </strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.php"><strong> Home </strong></a></li>
                    <li class="active" role="presentation"><a href="about.php"><strong>About Us</strong></a></li>
                    <?php if(isset($_SESSION['uid'])){ ?>
                    <li role="presentation"><a><strong><?php echo $_SESSION['uname'];?> </strong></a></li>
                    <li role="presentation"><a href="logout.php"><strong>Logout </strong></a></li>
                    <?php }else{ ?>
                    <li role="presentation"><a href="login.php"><strong>SignUp|Login </strong></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <hr>
        <main class="main-content">
            <div class="container">
                <h2 class="section-title">The Team</h2>
                <div class="row">
                    <div class="col-sm-6 col-md-6">

                        <div class="card hovercard">
                            <div class="cardheader">

                           </div>
                            <div class="avatar">
                                <img alt="" src="assets\img\gulu.jpg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    <a target="_blank" href="#">Gulshan Baraik</a>
                                </div>
                                <div class="desc">2017PGCACA36</div>
                                <div class="desc">MCA 4th Semester</div>
                                <div class="desc">NIT Jamshedpur</div>
                            </div>
                            <div class="bottom">
                                <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a class="btn btn-danger btn-sm" rel="publisher"
                                    href="https://plus.google.com/+ahmshahnuralam">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a class="btn btn-primary btn-sm" rel="publisher"
                                    href="https://plus.google.com/shahnuralam">
                                    <i class="fa fa-facebook"></i>
                                </a>

                            </div>
                        </div>


                    </div>
                    <div class="col-sm-6 col-md-6">

                        <div class="card hovercard">
                            <div class="cardheader">

                            </div>
                            <div class="avatar">
                                <img alt="" src="assets/img/anand.png">
                            </div>
                            <div class="info">
                                <div class="title">
                                    <a target="_blank" href="#">Anand Kumar</a>
                                </div>
                                <div class="desc">2017PGCACA37</div>
                                <div class="desc">MCA 4th Semester</div>
                                <div class="desc">NIT Jamshedpur</div>
                            </div>
                            <div class="bottom">
                                <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a class="btn btn-danger btn-sm" rel="publisher"
                                    href="https://plus.google.com/+ahmshahnuralam">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a class="btn btn-primary btn-sm" rel="publisher"
                                    href="https://plus.google.com/shahnuralam">
                                    <i class="fa fa-facebook"></i>
                                </a>

                            </div>
                        </div>


                    </div>

                </div>
            </div> <!-- .container -->
        </main>

    </div>
    <!-- Default snippet for navigation -->


<footer style="background-color:lightblue;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">Goods Transport Company Website </a></h3>
                <p class="links"><a href="index.php">Home</a><strong> · </strong><a href="about.php">About us</a></p>
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
                    <p> Established by Gulshan and Anand in the year 2019.</p>
                    <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a
                        href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                        class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
                    </div>
                </div>
            </div>
</footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>