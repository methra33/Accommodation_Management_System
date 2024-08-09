<html>
<head>
<style>
html,
body {
	height: 100%;
}

body {
	margin: 0;
	background-image:url('https://wallpaperaccess.com/full/1145728.jpg');
	font-family: sans-serif;
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
font-family:cursive;
font-size:25px;
}
caption{
color:white;}
th,
td {
	padding: 15px;
	background-color: rgba(300,255,255,0.7);
	color: #8E24AA;
}

th {color:white;
	text-align: left;
background-color: #55608f;
}
.bn632-hover {

  width: 160px;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  cursor: pointer;
  height: 55px;
  text-align: center;
  border: none;
  background-size: 300% 100%;
  border-radius: 50px;
  -o-transition: all 0.4s ease-in-out;
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.bn632-hover:hover {
  background-position: 100% 0;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn632-hover:focus {
  outline: none;
}

.bn632-hover.bn24 {
  background-image: linear-gradient(
      to right,
      #6253e1,
      #852d91,
      #a3a1ff,
      #f24645
    );
  box-shadow: 0 4px 15px 0 rgba(126, 52, 161, 0.75);
}
</style>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","ams");
if(!$con)
{
die("Could not connect:" .mysqli_connect_error());
}
$area=$_POST["sec"];
$bhk=$_POST["fir"];
$result=mysqli_query($con,"select * from House_details a,Owner_constraints b where a.Houseid=b.Houseid");
echo "<center>";
echo "<table>";
echo "<caption><h1>House Details</h1></caption>";
echo "<br/><br/>";
echo "<tr><th>House id</th><th>House Name</th><th>Address</th><th>Area</th><th>BHK</th><th>Furnished</th><th>No of People Allowed</th><th>Marital Status</th><th>Gender Allowed</th><th>Pets</th><th>Restrictions</th><th>Status</th><th>Buy</th></tr>";
while($row=mysqli_fetch_array($result)){
if($row['BHK']==$bhk and $row['Area']==$area){
echo "<tr><td>".$row['Houseid']."</td><td>".$row['Name']."</td><td>".$row['Address']."</td><td>".$row['Area']."</td><td>".$row['BHK']."</td><td>".$row['Furnished']."</td><td>".$row['NoOfPeopleAllowed']."</td><td>".$row['MaritalStatus']."</td><td>".$row['GenderAllowed']."</td><td>".$row['Pets']."</td><td>".$row['Restrictions']."</td><td>".$row['Status']."</td><td><a href='pay.html'><button class='bn632-hover bn24'>RENT THE HOUSE</button></a></td></tr>";
echo "<br/>";
}
echo "</center>";}
mysqli_close($con);
?>
</body>
</html>