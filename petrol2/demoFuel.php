<?php
$con=pg_connect("dbname=petroldatabase user=postgres password=redhat") or die ("cannot find connecion");
$f=$_POST['f1'];
$l=$_POST['f2'];
$e=$_POST['f3'];
$p=$_POST['f4'];
$m=$_POST['f5'];
$g=$_POST['f6'];
$h=$_POST['f7'];
$q="insert into fuel (Fuel_id,Fuel_name,Fuel_type,Description,Price ,Stock ,Unit) values('".$f."','".$l."','".$e."','".$p."','".$m."','".$g."','".$h."')";
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
?>
