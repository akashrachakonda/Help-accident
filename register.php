<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hacker";	
$vehicleno=$_POST["vehicleno"];
$Name=$_POST["Name"];
$number=$_POST["number"];
//$num='91'+'$number';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}	
$sql = "INSERT INTO vehiclereg(vehicleno,chassisno,number) VALUES('$vehicleno','$Name','91$number')";

$ss=mysqli_query($conn, $sql);
echo $ss;
/*if(mysqli_num_rows($ss)>0)
{
header("location:regss.html");
}
else 
{
    header("location:already.html");
}*/

	

mysqli_close($conn);
?>