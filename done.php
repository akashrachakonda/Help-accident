<?php	
$vehicleno=$_POST["vehicleno"];
$vehicleno=stripcslashes($vehicleno);
$vehicleno=mysql_real_escape_string($vehicleno);

mysql_connect("localhost","root","");
mysql_select_db("hacker");

$sql=mysql_query("select * 
from vehiclereg
 where vehicleno='$vehicleno'") or
 die(mysql_error());
 $total=mysql_fetch_array($sql);
 
if($total['vehicleno']==$vehicleno)
{
	$ph1=$total['ph1']; 
	echo "$ph1";
   // Authorisation details.
	$username = "akashpintu09@gmail.com";
	$hash = "275ceaec948c46426eb742efd717229eb348e8d4ac77adb036338825c9e58918";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "$ph1"; // A single number or a comma-seperated list of numbers
	$message = "Hello brooooooooooooo";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 $r=curl_exec($ch); // This is the result from the API
	curl_close($ch);
	//print_r($r);
	//exit;
	//var_dump($r);
	$x=explode('"',$r);
	echo $x[39];
	if(strcmp($x[39],"success"))
	header("location:msgff.html");
    else
	header("location:msgss.html");
}
else
	header("location:vlms.html");

?>


