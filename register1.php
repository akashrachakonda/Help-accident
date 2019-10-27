<?php
include("home2.html");
?>
<html>
<head>
<title>Help Accident...</title>					
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

.round input[type="number"]{
width:200px;
padding:10px;
height:30px;
border-radius:5px;
margin-left:40px;
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
var x=document.forms["My"]["vehicleno"].value;
var y=document.forms["My"]["Name"].value;
var z=document.forms["My"]["number"].value;
if(x==""&&y==""&&z=="")
{
alert("Page must be filled");
return false;
}
if(x=="")
{
alert("vehicleNo must be filled");
return false;
}
if(x.length<10||x.length>10)
{
alert("VehicleNo must be 10 numbers");
return false;
}
/*if(!isNaN(x))
{
alert("vehicleNo must be in Alphabets");
return false;
}*/
if(y=="")
{
alert("ChassisNo must be filled");
return false;
}
if(y.length<5||y.length>5)
{
alert("ChassisNo must be last 5 numbers");
return false;
}
if(isNaN(y))
{
window.alert("ChassisNo must be filled with Numbers");
return false;
}
if(z=="")
{
alert("PhoneNo  must be filled");
return false;
}
if(z.length<10||z.length>10)
{
alert("PhoneNo must be 10 numbers");
return false;
}
}
</script>
</head>
<center>
<label class="la"><b>Registration form</b></label><br><br>
</center>
<body>
<div class="col"><br><br><br>
<div class="col2"><br>
<div class="round">
<form name="My" action="register.php" onsubmit="return validation()" method="post" >
<br>
<label for="vehicleNo" style="margin-left:250px"><b>VehicleNo:</b></label>
<input type="text" name="vehicleno" id="vehicleno" placeholder=" Enter u r vehicleNo"><br>
<label for="Name"><b></b></label><br>
<b style="margin-left:250px">ChassisNo:</b><input type="text" name="Name" id="Name" placeholder="Enter last5 digits of chassisNo"><br>
<label for="number"><b></b></label><br>
<b style="margin-left:250px">PhoneNo:</b><input type="number" name="number" id="number" placeholder="Enter u r phoneNo" ><br>
<br><input type="submit" value="Register"><br>
</form>
<div>
<div>
</div>
</body>
</html>