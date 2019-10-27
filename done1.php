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
margin-top:20px;
}

.round input[type="text"]{
width:200px;
padding:10px;
height:30px;
border-radius:5px;
margin-left:35px;
margin-top:40px;
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
var y=document.forms["My"]["vehicleno"].value;
if(y=="")
{
alert("vehicleNo must be filled ");
return false;
}
}
</script>
<center>
<label class="la"><b>AlertNow...</b></label><br><br>
</center>
<title>Help Accident...</title>
</head>
<body>
<div class="col"><br><br><br>
<div class="col2"><br>
<div class="round">
<!--<h1>Sign In </h1>-->
<form name="My" action="done.php" onsubmit="return validation()" method="post" >
<b style="margin-left:250px">VehicleNo:</b><label for="VehicleNo:-"><b></b></label>
<input type="text" name="vehicleno" id="vehicleno" placeholder="Enter VehicleNo"><br>
<br><input type="submit" value="Search"><br>
</form>
</div>
</div>
</div>
</body>
</html>

