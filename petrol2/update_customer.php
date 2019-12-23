<script type='text/javascript'>
function validate()
{
	x = document.forms["search"]["cust_id"];

	if(x==null || x.value=='')
	{
		alert("Please select customer ID");
		return false;
	}

	return true;
}
</script>
<link rel='stylesheet' type='text/css' href='style.css'>
<body background='back.jpg'>
<?php
	include 'admin_header.php';
	include 'db.php';

	$sql = "select * from customer";
	$result = pg_query($con, $sql);
?>
<form method='post' action='update_customer1.php' name='search' onsubmit='return validate()'>
<table align='center' width=600 style='position:fixed;top:200px;left:100px;right:100px;border:1px solid red;background:#F2C334;box-shadow:8px 8px 8px #888888;'>
<tr>
	<td colspan=2 align='center'><b>Update Customer</b></td>
</tr>
<tr>
	<td><b>Customer ID:</b></td>
	<td>
	<select name='cust_id'>
	<option value=''>---</option>
<?php
	while($row=pg_fetch_row($result)){
?>
	<option value='<?php echo $row[0];?>'><?php echo $row[0];?></option>
<?php
	}
?>
	</select>	
	</td>
</tr>
<tr>
	<td align='center'><input type='submit' value='OK' class='btn'></td>
	<td align='center'><input type='reset' value='Clear' class='btn'></td>
</tr>
</table>
</form>
<?php
	include 'footer.php';
?>
</body>

