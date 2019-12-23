<html>
<head>
<title>user registration</title>
</head>
<style>
e
{
float:left;
color:white;
}
d
{
display:inline-block;
padding:5px 20px;
background-color:#f2f3f3;
}
</style>
</head>
<body background="black-plain-solid.svg">
<div style='background-color:lightgreen'>
<img src='petrol-pump-signs-250x250.jpg' width='170' height='150'>
<center><font color=blue size="22"><B>Petrol Pump System</B></center></font>
</div>
<br>
<center>
<fieldset style="display: inline-block;
background-color:brown;
  margin-left:0.75em;
  margin-right:0.75em;
  padding-top:0.75em;
  padding-bottom:0.75em;
  padding-left: 2.75em;
  padding-right: 2.75em;
  border: 3px grove;">
<h1><d><div class="d">Register</d></div></h1><br>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<lable><e>Username</lable></e><br><br>
<e><input type="text" name="username" required="required" placeholder="username"></e><br><br>
<lable><e>Email</e></lable><br><br>
<e><input type="email" name="email" placeholder="email"></e><br><br>
<lable><e>Password</e></lable><br><br>
<e><input type="password" name="password_1"></e><br><br>
<lable><e>Confirm Password</e></lable><br><br>
<e><input type="password" name="password_2"></e><br><br>
<button type="submit" name="register">Register</button>
<p>Already a member?<a href="petrol_login.php"> Sign in</a></p>


<?php
$f=0;
if($_SERVER['REQUEST_METHOD']=="POST")
{
$username=$_POST['username'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
}	
?>
<?php
 if(empty($username)||empty($email)||empty($password_1)||empty($password_2))
 {
 $m1="all information required";
echo "<script>
alert('$m1');
</script>";
  $f=1;
 }
else if($password_1!=$password_2)
{
 $f=1;
$m1="password Not matched";
echo "<script>
alert('$m1');
</script>";
 }
  if($f==0)  
{
if(isset($_POST['register']))
{
$con=pg_connect("dbname=petroldatabase user=postgres password=redhat") or die ("cannot find connecion");
$f=$_POST['username'];
$l=$_POST['email'];
$e=$_POST['password_1'];
$p=$_POST['password_2'];
$q="insert into register(username ,emailid ,password,confirmpassword) values('".$f."','".$l."','".$e."','".$p."')";
$rs=pg_query($q) or die("error1");
if($rs)
{
$message="registered Sucessfully";
echo "<SCRIPT> 
alert('$message');
</SCRIPT>";
}
if($rs)
{
header('location: petrol_login.php');
}
else
echo "error2";
}
}
?>
		
</body>
</html>
