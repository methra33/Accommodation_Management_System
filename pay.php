<?php
$con=mysqli_connect("localhost","root","","ams");
if(!$con)
{
die("Could not connect:" .mysqli_connect_error());
}
$hid=$_POST["hid"];

$result=mysqli_query($con,"update Housedetails set Status='Bought' where Houseid=$hid");
mysqli_close($con);
header('Location:index.html');?>
