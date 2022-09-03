<table border="1" align="center">
	<tr>
		<td>ID</td>
		<td>Họ và tên</td>
		<td>Email</td>
		<td>Địa chỉ</td>
		<td>SDT</td>
	</tr>

	<?php 
		require 'connect.php';
		$query = mysqli_query($conn, "SELECT * FROM 'sale_table'");
		while($row = mysqli_fetch_array($query)){

	 ?>
	 <tr>
	 	<td><?php echo $row['id'];  ?></td>
	 	<td><?php echo $row['username'];  ?></td>
	 	<td><?php echo $row['email'];  ?></td>
	 	<td><?php echo $row['address'];  ?></td>
	 	<td><?php echo $row['phonenumber'];  ?></td>

	 	<td><a href="edit_user.php?id=<?php echo $row['id']; ?>"></a></td>
	 	<td><a href="delete_user.php?id=<?php echo $row['id']; ?>"></a></td>
	 </tr>
	<?php 
	}
	?>
	
</table>