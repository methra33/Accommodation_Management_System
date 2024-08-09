<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$mysql_host="localhost";
$mysql_username="root";
$mysql_password="";
$mysql_database="ams";

$hi=filter_var($_POST["houseid"],FILTER_SANITIZE_STRING);
$np=filter_var($_POST["nop"],FILTER_SANITIZE_STRING);
$ms=filter_var($_POST["ms"],FILTER_SANITIZE_STRING);
$gen=filter_var($_POST["gen"],FILTER_SANITIZE_STRING);
$pa=filter_var($_POST["pa"],FILTER_SANITIZE_STRING); 
$re=filter_var($_POST["re"],FILTER_SANITIZE_STRING);

$mysqli=new mysqli($mysql_host,$mysql_username,$mysql_password,$mysql_database);
if ($mysqli->connect_error){
die('error:('. $mysqli->connect_errno.')'.$mysqli->connect_error);
}

$statement=$mysqli->prepare("INSERT INTO Owner_constraints(Houseid,NoOfPeopleAllowed,MaritalStatus,GenderAllowed,Pets,restrictions) VALUES(?,?,?,?,?,?)");

$statement->bind_param('ssssss',$hi,$np,$ms,$gen,$pa,$re);

if ($statement->execute()){
echo "<script>alert('Thank you for Registering.');
header('Location:1_login.html');</script>";
}else{
print $mysqli->error;
}
}
?>