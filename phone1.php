<?php
session_start();
include("home2.html");
$x=$_SESSION["vno"];
if($x==null)
	header("location:vehicle1.php");
?>
<html>
<head>					
<style>
.la{
font-size:2.7em;
}
.col{
background-color:navy;
height:400;
}
.col2{
background-color:white;
height:300;
margin-left:75px;
margin-right:75px;

}
.round{
border-radius:30px;
width:1000px;
height:250px;
background-color:#909090;
margin-top:10px;
margin-left:50px;
padding-top:10px;
padding-right:10px;
padding-left:50px;
}
.round input[type="text"]{
autofocus:yes;
padding:10px;
width:200px;
height:30px;
border-radius:5px;
margin-left:30px;
}

.round input[type="submit"]{
padding:10px;
width:200px;
height:40px;
border-radius:10px;
margin-left:360px;
}

.round input[type="password"]{
width:200px;
padding:10px;
height:30px;
border-radius:5px;
margin:3px;	
}	
</style>
<script>
function validation()
{
var y=document.forms["My"]["ph1"].value;
var z=document.forms["My"]["ph2"].value;
if(y=="")
{
alert("ph1 must be filled ");
return false;
}
if(z=="")
{
alert("ph2 must be filled ");
return false;
}
}
</script>
<center>
<label class="la"><b>Registration form</b></label><br><br>
</center>
<title>Help Accident...</title>
</head>
<body>
<div class="col"><br><br><br>
<div class="col2"><br>
<div class="round">
<!--<h1>Sign In </h1>-->
<form name="My" action="phone.php" onsubmit="return validation()" method="post" >
<br>
<label for="ph1"><b></b></label>
<b style="margin-left:250px">PhoneNo 1:</b><input type="text" name="ph1" id="ph1" placeholder=" Enter u r PhoneNo:1"><br>
<label for="ph2"><b></b></label><br	>
<b style="margin-left:250px">PhoneNo 2:</b><input type="text" name="ph2" id="ph2" placeholder="Enter u r phoneNo:2"><br><br>
<br><input type="submit" value="submit"><br>
</form>
</div>
</div>
</div>
<script src="script.js"></script>
</body>
</html>


