<?php
 session_start();
include('dbcon.php');
if (isset($_SESSION['uid']))
{
	
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HomePage</title>




  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
  <link rel="stylesheet" href="assets/css/style12.css">
  <script src="script.js"></script>

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:lightyellow;">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand navbar-link" href="index.php"><img src="assets/img/logo.jpg" id="logo"><strong> GTC
          </strong></a>
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span
            class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span
            class="icon-bar"></span></button>
      </div>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav navbar-right">
          <li role="presentation"><a href="about.php"><strong>About Us</strong></a></li>
          <?php if(isset($_SESSION['uid'])){ ?>
          <li role="presentation" style="color:red;"><a href="user/userdash.php"><strong> Dashboard </strong></a></li>
          <li role="presentation"><a><strong><?php echo $_SESSION['uname'];?> </strong></a></li>
          <li role="presentation"><a href="logout.php"><strong>Logout </strong></a></li>
          <?php }else{ ?>
          <li role="presentation"><a href="login.php"><strong>SignUp|Login </strong></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="slideshow-container">

    <slider>
      <slide>
        <p></p>
      </slide>
      <slide>
        <p></p>
      </slide>
      <slide>
        <p></p>
      </slide>
      <slide>
        <p></p>
      </slide>
    </slider>

  </div>
  <div class="container site-section" id="welcome">
      
  </div>
  <footer style="background-color:lightblue;">
    <div class="container">
      <div class="row">
        
        <div class="col-md-12 footer-contacts" align="center">
        <h3><a href="#">Goods Transport Company</a></h3>
        <p><a class="btn btn-primary btn-lg btn-block active" role="button">You call, we haul, that's all.</a></p>
        </div>
        
      </div>
    </div>
  </footer>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>