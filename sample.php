<html>
<head>
<style>
body {
  font-family: 'lato', sans-serif;
}
.container {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
  small {
    font-size: 0.5em;
  }
}

.responsive-table {
  li {
    border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
  }
  .table-header {
    background-color: #95A5A6;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing:
</style>
</head>
<body>
<h1>Details</h1>
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
echo "<tbody>";
echo "<br/><br/>";
while($row=mysqli_fetch_array($result)){
if($row['Password']==$pwd){
echo "<tr><th>Name</th><td>".$row['Name']."</td></tr>";
echo "<br/>";
echo "<tr><th>Email</th><td>".$row['Email']."</td></tr>";
echo "<br/>";
echo "<tr><th>Date of Birth</th><td>".$row['DOB']."</td></tr>";
echo "<br/>";
echo "<tr><th>Gender</th><td>".$row['Gender']."</td></tr>";
echo "<br/>";
echo "<tr><th>BloodGroup</th><td>".$row['Bloodgroup']."</td></tr>";
echo "<br/>";
echo "<tr><th>Address</th><td>".$row['Address']."</td></tr>";
echo "<br/>";
}
echo "</tbody>";
echo "</table>";
echo "</center>";}
}elseif($type=="owner"){
$result=mysqli_query($con,"select * from Owner_detail");
echo "<center>";
echo "<table>";
echo "<br/><br/>";
while($row=mysqli_fetch_array($result)){
if($row['Password']==$pwd){
echo "<tr><td>Name</td><td>".$row['Name']."</td></tr>";
echo "<br/>";
echo "<tr><td>Email</td><td>".$row['Email']."</td></tr>";
echo "<br/>";
echo "<tr><td>Date of Birth</td><td>".$row['DOB']."</td></tr>";
echo "<br/>";
echo "<tr><td>Gender</td><td>".$row['Gender']."</td></tr>";
echo "<br/>";
echo "<tr><td>BloodGroup</td><td>".$row['Bloodgroup']."</td></tr>";
echo "<br/>";
echo "<tr><td>Address</td><td>".$row['Address']."</td></tr>";
echo "<br/>";
}
echo "</table>";
echo "</center>";}}
mysqli_close($con);
?>
</body>
</html>