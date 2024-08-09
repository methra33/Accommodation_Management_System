<html>
<head>
<style>
html,
body {
	height: 100%;
}
h1{
color:black;
font-family:cursive;
font-size:50px;}

body {
	margin: 0;
	background-image: url("https://wallpaperaccess.com/full/4713993.jpg");
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
	font-family: cursive;
	font-weight: 100;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

table {
	width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
font-size:30px;
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
}


th {
		background-color: #55608f;
	}

tr {
&:hover {
	background-color: rgba(255,255,255,0.3);
		}
	}
	td {
		position: relative;
		&:hover {
			&:before {
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	
}



</style>
</head>
<body>

<?php
$con=mysqli_connect("localhost","root","","ams");
if(!$con){
die("Could not connect:" .mysqli_connect_error());
}
$username=$_POST["login_txt"];
$pwd=$_POST["password_txt"];
$type=$_POST["ut"];
if($type=="tenant"){
$result=mysqli_query($con,"select * from User_details");
echo "<center>";
echo "<table>";
echo "<caption><h1>Tenant Details</h1></caption>";
echo "<br/><br/>";
while($row=mysqli_fetch_array($result)){
if($row['Password']==$pwd){
echo "<tr><td>Name</td><td>".$row['Name']."</td></tr>";
echo "<br/>";
echo "<tr><td>Email</td><td>".$row['Email']."</td></tr>";
echo "<br/>";
echo "<tr><td>Date of Accomodation</td><td>".$row['DateOfAccomodation']."</td></tr>";
echo "<br/>";
echo "<tr><td>Gender</td><td>".$row['Gender']."</td></tr>";
echo "<br/>";
echo "<tr><td>BloodGroup</td><td>".$row['BloodGroup']."</td></tr>";
echo "<br/>";
echo "<tr><td>No of People</td><td>".$row['NoofPeople']."</td></tr>";
echo "<br/>";
}
echo "</center>";}
}
if($type=="owner"){
$result=mysqli_query($con,"select * from Owner_detail");
echo "<center>";
echo "<table>";
echo "<caption><h1>Owner Details</h1></caption>";
echo "<br/><br/>";
while($row=mysqli_fetch_array($result)){
if($row['Password']==$pwd){
echo "<tr><td>Name</td><td>".$row['Name']."</td></tr>";
echo "<br/>";
echo "<tr><td>Email</td><td>".$row['Email']."</td></tr>";
echo "<br/>";
echo "<tr><td>Gender</td><td>".$row['Gender']."</td></tr>";
echo "<br/>";
echo "<tr><td>BloodGroup</td><td>".$row['BloodGroup']."</td></tr>";
echo "<br/>";
echo "<tr><td>Phone number</td><td>".$row['Phonenumber']."</td></tr>";
echo "<br/>";
}
echo "</center>";}
}
mysqli_close($con);
?>
</body>
</html>