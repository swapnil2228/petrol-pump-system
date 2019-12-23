<html>
<head>
<title> login petrol pump management System </title>
<style>
g 
{
font-size:20px;
}
</style>
</head>
<body bgcolor="grey">
<div style='background-color:lightgreen'>
<img src='petrol-pump-signs-250x250.jpg' width='170' height='150'>
<center><font color=blue size="22"><B>PS Petrol Pump System</B></center></font>
</div>
<br>
<center>
<fieldset style="display: inline-block;
background-color:brown;
  margin-left:0.75em;
  margin-right:0.75em;
  padding-top:0.75em;
  padding-bottom:0.75em;
  padding-left: 0.75em;
  padding-right: 0.75em;
  border: 3px grove;"><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<h1>Login</h1>
<g><b><p>UserName : </b><input type="text" name="uname" required="required" placeholder="username">*</p>
<p><b>Password : </b><input type="password" name="upass" required="required" placeholder="eigth digit">*</p>
<p><input type="submit" value="Login" name="login"/></p>
</g>
<p>Not a Member?<a href="petrol_register.php"> Sign up</a></p>

</center><br>
<p><center><font color=white>&copy All Rights Reserved</font></center></p>
</body>
</html>
<?php
if(isset($_POST['login']))
{
$con=pg_connect("dbname=petroldatabase user=postgres password=redhat") or die ("cannot find connecion");
$f=$_POST['uname'];
$l=$_POST['upass'];
$q="select * from register";
$rs=pg_query($q) or die("error");
while($row=pg_fetch_row($rs))
{
if($f==$row[0] && $l==$row[2])
{
echo "succesfull";
header('location: homepetrol.html');
}
else
{
$m1="Enter valid loginid and password";
echo "<script>
alert('$m1');
</script>";
}
}
}
?>

