<?php 
	// bước 1: triệu hồi file kết nối csdl
	include 'login.php';
	// bước 2: tiến hành truy vấn SQL
	$sql = "SELECT * FROM pass";
	$query = mysqli_query($conn,$sql);
	// bước 3: trả kết quả
	$total_row = mysql_nun_row($query);
	echo $total_row;

 ?>