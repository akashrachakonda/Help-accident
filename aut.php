<?php	
session_start();
$_SESSION["vno"] = $_POST["vehicleno"];	
$_SESSION["chno"] = $_POST["Name"];
$vehicleno=$_POST["vehicleno"];
$vehicleno=stripcslashes($vehicleno);
$vehicleno=mysql_real_escape_string($vehicleno);
$Name=$_POST["Name"];
$Name=stripcslashes($Name);
$Name=mysql_real_escape_string($Name);

mysql_connect("localhost","root","");
mysql_select_db("hacker");

$sql=mysql_query("select * 
from vehiclereg
 where vehicleno='$vehicleno'") or
 die(mysql_error());
 $total=mysql_fetch_array($sql);
// echo $_POST["vehicleno"];

if($total['vehicleno']==$vehicleno&&$total['Chassisno']==$Name)
{
	
      header('location:phone1.php');
}
else
	echo "<b>Wrong vehicleNo</b>";

?>


