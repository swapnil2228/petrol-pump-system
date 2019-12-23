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
<li><a href="bill.php">Bill</a>
<ul>
<li><a href="add_bill.php">Add Bill</a></li>
<li><a href="view_bill.php">view bill</a></li>
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

<header><h1>Generate Bill</h1></header><br>
<form method="POST" action="add_bill.php">
<center>
BIll no <e>:<input type="text" name="f1"></e><br><br>
Order id <e>:<input type="text" name="f2"></e><br><br>
amount<e>:<input type="text" name="f3"></e><br><br>
date<e>:<input type="text" name="f4"></e><br><br>

<input type="submit" value="submit" name="submit"></center></fieldset>
</form></center>
<?php
if(isset($_POST['submit']))
{
$con=pg_connect("dbname=petroldatabase user=postgres password=redhat") or die ("cannot find connecion");
$f=$_POST['f1'];
$l=$_POST['f2'];
$e=$_POST['f3'];
$p=$_POST['f4'];
$q="insert into bill( bill_no,order_id ,amount, date) values('".$f."','".$l."','".$e."','".$p."')";
$rs=pg_query($q) or die(" quer 1 error");

if($rs)
{
$message="bill Record Saved";
echo "<SCRIPT> 
alert('$message');
</SCRIPT>";
}
else
echo "not inserted";
}
?>
<center><p>&copy All Rights Reserved
</p></center>
</body></html>
