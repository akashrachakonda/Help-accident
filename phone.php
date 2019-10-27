<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hacker";
$vehicleno= $_SESSION["vno"];	
$ph1=$_POST["ph1"];
$ph2=$_POST["ph2"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}	
$sql ="UPDATE vehiclereg SET ph1='91$ph1',ph2='91$ph2' where vehicleno='$vehicleno'";
if (mysqli_query($conn, $sql)) {
    header("location:upss.html");
} else {
    header("locatio:upff.html");    
}

mysqli_close($conn);
?>