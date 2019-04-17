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

<!-- Simple Invoice - START -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center">
                <h2>Invoice for shipment #6092699298</h2>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-4 pull-left">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Billing Details</div>
                        <div class="panel-body">
                            <strong>Gulshan Baraik :</strong><br>
                            HD-2005, NIT Jamshedpur<br>
                            Jamshedpur<br>
                            <strong>-831014</strong><br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Payment Information</div>
                        <div class="panel-body">
                            <strong>Card Name:</strong> Visa<br>
                            <strong>Card Number:</strong> ***** 332<br>
                            <strong>Exp Date:</strong> 09/2020<br>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-12 col-md-4 col-lg-4">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Shipping Address</div>
                        <div class="panel-body">
                            <strong>Pratap Yadav:</strong><br>
                            Lalpur <br>
                            Ranchi<br>
                            <strong>-834001</strong><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Product Name</strong></td>
                                    <td class="text-center"><strong>Total Cost </strong></td>
                                    <td class="text-center"><strong>Quantity</strong></td>
                                    <td class="text-right"><strong>Total</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>LG</td>
                                    <td class="text-center">9000</td>
                                    <td class="text-center">100</td>
                                    <td class="text-right">900000</td>
                                </tr>
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-center"><strong>Total</strong></td>
                                    <td class="highrow text-right">&#x20B9; 900000</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}
</style>

<!-- Simple Invoice - END -->

</div>

    </body>
</html>