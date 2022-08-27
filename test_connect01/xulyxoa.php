<?php 
	$conn = mysqli_connect("localhost","root","","test_connect");
	$masv = $_GET['idsv'];
	//câu sql delete
	$sql = "DELETE FROM student WHERE idsv = '$masv'";
	if (mysqli_query($conn,$sql)) { //nếu thành công chuyển đến trang index.php
		header('location: index.php');
	}else{
		$result = "Xóa không thành công!" . mysqli_error($conn);
	}
	//ngắt kết nối
	mysqli_close($conn);
 ?>