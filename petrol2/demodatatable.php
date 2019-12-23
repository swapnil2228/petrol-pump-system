<link rel='stylesheet' type='text/css' href='style.css'>
<body background='back.jpg'>
<?php
$con=pg_connect("dbname=petroldatabase user=postgres password=redhat");
$q="select * from fuel";
$result =pg_query($q);	
?>
<table width='100%' border=1>
<tr bgcolor='red'>
	<th>Fuel_id</th>
	<th>Fuel_name</th>
	<th>Fuel_type</th>
	<th>Description</th>
	<th>Price</th>
	<th>Stock</th>
	<th>Unit </th>
  

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
	<td align='center'><?php echo $row[5]; ?></td>
	<td align='center'><?php echo $row[6]; ?></td>

</tr>
<?php
	}
?>
</table>
</body>

