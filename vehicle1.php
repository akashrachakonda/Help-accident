<?php
include("home2.html");
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
.round input[type="submit"]{
padding:10px;
width:200px;
height:40px;
border-radius:10px;
margin-left:360px;
}

.round input[type="text"]{
width:200px;
padding:10px;
height:30px;
border-radius:5px;
margin-left:35px;
}

.round input[type="password"]{
width:200px;
padding:10px;
height:30px;
border-radius:5px;
margin-left:px;
}
</style>
<script>
function validation()
{
var y=document.forms["My"]["vehicleno"].value;
var z=document.forms["My"]["Name"].value;
if(y=="")
{
alert("vehicleNo must be filled ");
return false;
}
if(z=="")
{
alert("ChassisNo  must be filled");
return false;
}
}
</script>
<title>Help Accident...</title>
<center>
<label class="la"><b>PhoneNo Updation...</b></label><br><br>
</center>
</head>
<body>
<div class="col"><br><br><br>
<div class="col2"><br>
<div class="round">
<form name="My" action="aut.php" onsubmit="return validation()" method="post" >
<label for="VehicleNo:-"><b></b></label>
<br>
<b style="margin-left:250px">VehicleNo:</b><input type="text" name="vehicleno" id="vehicleno" placeholder="Enter VehicleNo"><br><br>
<b style="margin-left:250px">ChassisNo:</b><input type="text" name="Name" id="Name" placeholder="Enter last5 digits of chassisNo"><br>
<br><input type="submit" value="Search"><br>
</form>
</div>
</div>
</div>
</body>
</html>

