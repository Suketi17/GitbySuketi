<?php 
	require "conn.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cutumer</title>
</head>
<body>
	<table border="1" align="center">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Pass</th>
			<th>Add</th>
		</tr>
		<?php 
			$sql = "SELECT * FROM hau_table01";
			$query = mysqli_query($conn,$sql);
			while ($row = mysqli_fetch_array($query)) {
				
		 ?>
		<tr>
			<td>suketi</td>
			<td>suketi@gmail.com</td>
			<td>0909</td>
			<td>Edit | Delete</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>