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
<br><br>
<br>
<center>

<fieldset style="background-color:brown;display:inline;
  margin-left:0.75em;
  margin-right:0.75em;
  padding-top:0.75em;
  padding-bottom:0.75em;
  padding-left: 0.75em;
  padding-right: 0.75em;
  border: 3px grove;">
  

<center>
<header><h1>Attendence</h1></header><br><br></center>
<body bgcolor='grey'>
<center>
<form method="POST" action="add_attendence.php">
<r>Employee ID: <input type="text" name="E1"></r><br><br><br>
Day :
<select name=E2 >
<option>----</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>

</select>

month:
<select name=E3 >
<option>----</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>

</select>
year :
<select name=E4 >
<option>----</option>
<option>2000</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
<option>2014</option>
<option>2015</option>
<option>2016</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>

</select>
</r>
<br><br><br>
<r>status:<input type="text" name="E5"></r><br><br><br>
<input type="submit" value="Save" name="Save"/>
&nbsp&nbsp&nbsp<input type="submit" value="exit">

</fieldset></form></center>
<center>
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
$q="insert into attendence (employee_id,day,month,year,status) values('".$f."','".$l."','".$e."','".$p."','".$m."')";
$rs=pg_query($q) or die("error");
if($rs)
{
$message="Attendence record Saved Successfully";
echo "<SCRIPT> 
alert('$message');
</SCRIPT>";
}
else
echo "error";
}
?>


