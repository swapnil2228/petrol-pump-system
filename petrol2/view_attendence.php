<link rel='stylesheet' type='text/css' href='style.css'>
<html>
<head>
<title>Fuel </title>
<div style='background-color:gold'>
<img src='petrol-pump-signs-250x250.jpg' width='200' height='150'><br>
<font face="Times new roman" size="22"><center><B>PS Petrol Pump System</B></center></font>
</div>
<style>
r
{
float:left;
}
</style>
</head>
<body>

<body bgcolor='grey'>


<div class="nav">
<ul>
<li><a href="homepetrol.html">Home</a></li>
<li><a href="Attendence.php">Attendence</a>
<ul>
<li><a href="add_attendence.php">Add Attendence</a></li>
<li><a href="view_attendence.php">View Attendence</a> 
</ul>
</li>
<li><a href="petrol_login.php">logout</a></li>
</ul>
</div>
<br>
<center>
<h1>Attendence Records</h1></center>
<?php
$con=pg_connect("dbname=petroldatabase user=postgres password=redhat");
$q="select * from attendence";
$result =pg_query($q);	
?>
<table width='100%' border=1>
<tr bgcolor='red'>
	<th>Employee_id</th>
	<th>Day</th>
	<th>Month</th>
	<th>year</th>
	<th>Status</th>
  

</tr>
<?php
	while($row=pg_fetch_row($result)){
?>
<tr>
	<td align='center'><?php echo $row[0]; ?></td>
	<td align='center'><?php echo $row[1]; ?></td>
	<td align='center'><?php echo $row[2]; ?></td>
	<td align='center'><?php echo $row[3]; ?></td>
	<td align='center'><?php echo $row[4]; ?></td>


</tr>
<?php
	}
?>
</table>
<center>
<p>&copy All Rights Reserved
</center></p>
</body></html>

