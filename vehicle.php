<html>
<head>					
<style>
body{
//background-image:url('a.jpg');
//filter:blur(2px);
opacity:2px;
}
.round{
border-radius:30px;
-webkit-border-radius:15px;
font-size:px;
width:250px;
height:150px;
background-color:#909090;
margin-top:180px;
margin-left:500px;
padding-top:10px;
padding-right:10px;
padding-left:50px;
}
.round input[type="submit"]{
padding:10px;
width:200px;
height:40px;
border-radius:5px;
margin:0px;
}

.round input[type="text"]{
width:200px;
padding:10px;
height:30px;
border-radius:5px;
margin:3px;
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
<title>Login form</title>
</head>
<body>
<div class="round">
<!--<h1>Sign In </h1>-->
<form name="My" action="aut.php" onsubmit="return validation()" method="post" target="_blank">
<label for="VehicleNo:-"><b></b></label>
<br><input type="text" name="vehicleno" id="vehicleno" placeholder="Enter VehicleNo"><br>
<br><input type="submit" value="Search"><br>
</form>
</body>
</html>

