<link rel='stylesheet' type='text/css' href='style.css'>
<html>
<head>
<title>Employee </title>
<div style='background-color:gold'>
<img src='petrol-pump-signs-250x250.jpg' width='200' height='150'><br>
<font face="Times new roman" size="22"><center><B>PS Petrol Pump System</B></center></font>
</div>
</head>
<body bgcolor='grey'>
<div class="nav">
<ul>
<li><a href="homepetrol.html">Home</a></li>
<li><a href="Employee.php">Employee</a>
<ul>
<li><a href="add_employee.php">Add Employee</a></li>
<li><a href="delete_employee.php">Del Employee</a><li>
<li><a href="view_employee.php">View employee</a>  
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
<center>
<header><h1>Add Employee</h1></header><br><br></center>
<body bgcolor='grey'>
<center>
<form method="POST" action="add_employee.php">
Employee ID<e>: <input type="text" name="E1"></e><br><br>
Employee name<e>:<input type="text" name="E2"></e><br><br>
Address <e>:<input type="text" name="E3"></e><br><br>
Phone No. <e>:<input type="text" name="E4"></e><br><br>
Qualification <e>:<input type="text" name="E5"></e><br><br>
Job <e>:<input type="text" name="E6"></e><br><br>
Salary <e>:<input type="text" name="E7"></e><br><br>
<input type="submit" value="Save" name="Save"/>
&nbsp&nbsp&nbsp<input type="submit" value="exit">

</fieldset>
</form>
</center>
<p>&copy All Rights Reserved
</center></p>
</body></html>
<?php
if(isset($_POST['Save']))
{
$con=pg_connect("dbname=petroldatabase user=postgres password=redhat") or die ("cannot find connecion");
$f=$_POST['E1'];
$l=$_POST['E2'];
$e=$_POST['E3'];
$p=$_POST['E4'];
$m=$_POST['E5'];
$g=$_POST['E6'];
$h=$_POST['E7'];
$q="insert into employee (employee_id,employee_name,employee_address,employee_phone_no,qualification,job,salary) values('".$f."','".$l."','".$e."','".$p."','".$m."','".$g."','".$h."')";
$rs=pg_query($q) or die("error");
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


