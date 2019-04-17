<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
$sr = $_GET['sr'];
$de = $_GET['de'];

include('../dbcon.php');


$sql="SELECT Distance FROM cities WHERE Source = '".$sr."' AND Destination = '".$de."' ";
$result = mysqli_query($con,$sql);
$dist = mysqli_fetch_assoc($result);
echo $dist;
mysqli_close($con);
?>
</body>
</html>