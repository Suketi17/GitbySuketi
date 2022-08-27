<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ</title>
</head>
<body>
	<h3 align="center">Danh sách sinh viên</h3>
	<table border="1" align="center" cellspacing="0" cellpadding="0" width="850">
		<tr>
			<th>Mã sinh viên</th>
			<th>Họ và tên</th>
			<th>Giới tính</th>
			<th>Quê quán</th>
			<th>Ngày sinh</th>
			<th>Ngành học</th>
			<th>Tác vụ</th>
		</tr>

		<?php 
			//kết nối cở sở dữ liệu
			$conn = mysqli_connect("localhost","root","","test_connect");
			//truy vấn dữ liệu
			$sql = "SELECT * FROM student";
			$result = mysqli_query($conn,$sql);
			//in danh sách dữ liệu
			while ($row = mysqli_fetch_assoc($result)) { //vấn MySQL nào đó dưới dạng một mảng kết hợp

				$masv = $row["id"];
				$tensv = $row["fullname"];
				$gioitinh = $row["gender"];
				$diachi = $row["address"];
				$ngaysinh = $row["date"];
				$nganhhoc = $row["specialized"];
			?>
		 <tr>
		 	<td><?php echo $masv ?></td>
		 	<td><?php echo $tensv ?></td>
		 	<td><?php if ($gioitinh == 0) echo "Nam"; else if ($gioitinh == 1) echo "Nữ"; ?></td>
		 	<td><?php echo $diachi ?></td>
		 	<td><?php echo $ngaysinh ?></td>
		 	<td><?php echo $nganhhoc ?></td>

		 	<td>
		 		<a href="xylysua.php?idsv=<?php echo $masv; ?>">Sửa</a>
		 		<a href="xylysua.php?idsv=<?php echo $masv; ?>">Xóa</a>
		 	</td>
		 </tr>
		<?php 
		}
		?>

		<?php 

			mysqli_close($conn);
			//Hàm mysqli_close() thực hiện việc đóng kết nối cơ sở dữ liệu đã kết nối trước đó.
		 ?>

		 <tr>
		 	<td colspan="7" align="center">
		 		<!-- //Colspan html là một thuộc tính của thẻ table, nó được dùng để trộn các ô lại với nhau trên cùng một hàng. -->
		 		<button type="button" onclick="myFunction()">Thêm mới</button>
		 	</td>
		 </tr>
	</table>

	<script>
		function myFunction(){
			location.replace("themdulieu.php"); //điều hướng đến trang thêm mới data
		}
	</script>

</body>
</html>