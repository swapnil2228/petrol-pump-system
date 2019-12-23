<link rel='stylesheet' type='text/css' href='style.css'>
<html>
<head>
<script>
fucntion test()
{
var a=document.form.t.value;
if(a=='')
{
alert("insert somethig");
return 0;
}
else
return 1;
}
</script>
<title>Sales</title>
<div style='background-color:gold'>
<img src='petrol-pump-signs-250x250.jpg' width='200' height='150'><br>
<font face="Times new roman" size="22"><center><B>PS Petrol Pump System</B></center></font>
</div>
<body bgcolor='grey'>
<div class="nav">
<ul>
<li><a href="homepetrol.html">Home</a></li>
<li><a href="Sales.php">Sales</a>
<ul>
<li><a href="add_sales.php">Add Sales</a></li>
<li><a href="delete_sales.php">delete Sales</a></li>
<li><a href="view_sales.php">View Sales</a></li>
<li><a href="totalsales.php">Total Sales</a>
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

<header><h1>Add Sales</h1></header><br>
<form method="POST" action="add_sales.php" onsubmit="test()" name="form">
<center>
Sale ID :<input type="text" name="S1"><br><br>
Fuel ID :<input type="text" name="S2"><br><br>
Amount :<input type="text" name="S3"><br><br>
Quantity:<input type="text" name="S4"><br><br>
Total Price :<input type="text" name="S5"><br><br>
Date of sale :<input type="text" name="S6"><br><br>
<input type="submit" value="Save" name="Save"/>&nbsp
<input type="submit" value="Exit" name="Exit"/>
</center></fieldset>
</form></center>
<?php
if(isset($_POST['Save']))
{
$con=pg_connect("dbname=petroldatabase user=postgres password=redhat") or die ("cannot find connecion");
$f=$_POST['S1'];
$l=$_POST['S2'];
$e=$_POST['S3'];
$p=$_POST['S4'];
$m=$_POST['S5'];
$mm=$_POST['S6'];
$q="insert into sales(sales_id,fuel_id,amount,quantity,total_price,date_of_sale) values('".$f."','".$l."','".$e."','".$p."','".$m."','".$mm."')";
$rs=pg_query($q) or die("error");
$q1="update fuel set stock=stock - '$p' where fuel_id='$l'";
pg_query($q1)or die("update stock error");
$q2="select fuel_id from fuel order by fuel_id ASC";
pg_query($q2)or die("update stock error");
if($rs)
{
$message="record Saved";
echo "<SCRIPT> 
alert('$message');
</SCRIPT>";
}
else
echo "error";
}
?>

<center><p>&copy All Rights Reserved
</p></center>
</body></html>
