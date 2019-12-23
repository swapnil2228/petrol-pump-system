<link rel='stylesheet' type='text/css' href='style.css'>
<html>
<head>
<title>View Fuel </title>
<div style='background-color:gold'>
<img src='petrol-pump-signs-250x250.jpg' width='200' height='150'><br>
<font face="Times new roman" size="22"><center><B>PS Petrol Pump System</B></center></font>
</div>
</head>
<body>
<body bgcolor='grey'>
<div class="nav">
<ul>
<li><a href="homepetrol.html">Home</a></li>
<li><a href="bill.php">Bill</a>
<ul>
<li><a href="add_bill.php">Add Bill</a></li>
<li><a href="view_bill.php">view bill</a></li>
</ul>
</li>
<li><a href="petrol_login.php">logout</a></li>
</ul>
</div>
<br><br>
<center>
<h1>Employee Records</h1></center>
<?php
$con=pg_connect("dbname=petroldatabase user=postgres password=redhat");
$q="select * from bill";
$result =pg_query($q);	
?>
<table width='100%' border=1>
<tr bgcolor='red'>
	<th>Bill no.</th>
	<th>Order id</th>
	<th>Amount</th>
	<th>Date</th>
</tr>
<?php
	while($row=pg_fetch_row($result)){
?>
<tr>
	<td align='center'><?php echo $row[0]; ?></td>
	<td align='center'><?php echo $row[1]; ?></td>
	<td align='center'><?php echo $row[2]; ?></td>
	<td align='center'><?php echo $row[3]; ?></td>
</tr>
<?php
	}
?>
</table>
<center>
<p>&copy All Rights Reserved
</center></p>
</body></html>

