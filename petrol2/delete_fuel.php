<link rel='stylesheet' type='text/css' href='style.css'>

<html>
<head>
<title>Fuel </title>
<div style='background-color:gold'>
<img src='petrol-pump-signs-250x250.jpg' width='200' height='150'><br>
<font face="Times new roman" size="22"><center><B>PS Petrol Pump System</B></center></font>
</div>
<style>

</style>
</head>
<body bgcolor='grey'>


<div class="nav">
<ul>
<li><a href="homepetrol.html">Home</a></li>
<li><a href="Fuel.php">Fuel</a>
<ul>
<li><a href="add_fuel.php">Add fuel</a></li>
<li><a href="delete_fuel.php">delete fuel</a> </li>
<li><a href="view_fuel.php">View fuel</a>
</ul>
</li>
<li><a href="petrol_login.php">logout</a></li>
</ul>
</div>
<br><br>
<center>
<fieldset style="background-color:brown;display:inline;
  margin-left:0.75em;
  margin-right:0.75em;
  padding-top:0.75em;
  padding-bottom:0.75em;
  padding-left: 0.75em;
  padding-right: 0.75em;
  border: 2px grove;">

<header><h1>Delete Fuel</h1></header><br>
<form method='post' action='delete_fuel.php' name='search'>
Select Fuel_id:
<select name="f1">
<option>---</option>
<option>1</option>
<option>2</option>
<option>3</option>
</select>
<br><br>

<input type="submit" value="delete" name="delete"></center>
<center><p>&copy All Rights Reserved
</p></center>
</body></html>
<?php
if(isset($_POST['delete']))
{
$con=pg_connect("dbname=petroldatabase user=postgres password=redhat") or die ("cannot find connecion");
$d=$_POST['f1'];
$sql="delete from fuel where fuel_id='$d'";
$rs=pg_query($sql) or die("error");
if($rs)
{
$message="Fuelid=$d deleted SucessFully";
echo "<SCRIPT> 
alert('$message');
</SCRIPT>";
}
else
echo "error";
}
?>


