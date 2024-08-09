<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$mysql_host="localhost";
$mysql_username="root";
$mysql_password="";
$mysql_database="ams";

$hid=filter_var($_POST["hid"],FILTER_SANITIZE_STRING);
$hn=filter_var($_POST["name"],FILTER_SANITIZE_STRING);
$add=filter_var($_POST["add"],FILTER_SANITIZE_STRING);
$area=filter_var($_POST["area"],FILTER_SANITIZE_STRING);
$bhk=filter_var($_POST["bhk"],FILTER_SANITIZE_STRING); 
$fur=filter_var($_POST["fur"],FILTER_SANITIZE_STRING);
$st="not bought";

$mysqli=new mysqli($mysql_host,$mysql_username,$mysql_password,$mysql_database);
if ($mysqli->connect_error){
die('error:('. $mysqli->connect_errno.')'.$mysqli->connect_error);
}

$statement=$mysqli->prepare("INSERT INTO House_details(Houseid,Name,Address,Area,BHK,Furnished,Status) VALUES(?,?,?,?,?,?,?)");

$statement->bind_param('sssssss',$hid,$hn,$add,$area,$bhk,$fur,$st);

if ($statement->execute()){
echo "<script>alert('Thank you for Registering.');</script>";
header('Location:index.html');
}else{
print $mysqli->error;
}
}
?>