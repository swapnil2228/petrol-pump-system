<link rel='stylesheet' type='text/css' href='style.css'>
<html>
<head>
<title>Fuel </title>
<div style='background-color:gold'>
<img src='petrol-pump-signs-250x250.jpg' width='200' height='150'><br>
<font face="Times new roman" size="22"><center><B>PS Petrol Pump System</B></center></font>
</div>
</head>
<body bgcolor='grey'>
<div class="nav">
<ul>
<li><a href="homepetrol.html">Home</a></li>
<li><a href="Fuel.php">Fuel</a>
<ul>
<li><a href="add_fuel.php">Add fuel</a></li>
<li><a href="delete_fuel.php">delete fuel</a></li> 
<li><a href="update_fuel.php">update fuel</a></li>
<li><a href="view_fuel.php">View fuel</a> 
</ul>
</li>
<li><a href="petrol_login.php">logout</a></li>
</ul>
<br><br><br>
<center>
<fieldset style="background-color:brown;display:inline;
  margin-left:0.75em;
  margin-right:0.75em;
  padding-top:0.75em;
  padding-bottom:0.75em;
  padding-left: 0.75em;
  padding-right: 0.75em;
  border: 2px grove;">

<header><h1>update Fuel</h1></header><br>
<form method="POST" action="update_fuel.php">
<center>
Fuel ID <e>:<input type="text" name="f1"></e><br><br>
Stock <e>:<input type="text" name="f6"></e><br><br>
<input type="submit" value="submit" name="submit"></center></fieldset>
</form></center>
<?php
if(isset($_POST['submit']))
{
$f=$_POST['f1'];
$g=$_POST['f6'];
$con=pg_connect("dbname=petroldatabase user=postgres password=redhat") or die ("cannot find connecion");
$update="update fuel set stock=stock + '$g' where fuel_id='$f'";
$rsupdate=pg_query($update)or die("update error");
if($rsupdate)
{
$message="updated";
echo "<script>
alert('$message');
</script>";
}
else
echo "not updated";
}
?>
<center><p>&copy All Rights Reserved
</p></center>
</body></html>
