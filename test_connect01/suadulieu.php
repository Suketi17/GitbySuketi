<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sửa sinh viên</title>
</head>
<body>
	<?php 

	$conn = mysqli_connect("localhost","root","","test_connect");
	$masv = $_GET['idsv'];
	$sql = "SELECT * FROM student WHERE idsv = '$masv'";
	$result = mysqli_query($conn,$sql);

	while ($row = mysqli_fetch_assoc($result)) {
		$masv = $row["idsv"];
		$tensv = $row["fullname"];
		$gioitinh = $row["gender"];
		$diachi = $row["address"];
		$ngaysinh = $row["date"];
		$nganhhoc = $row["specialized"];

	}
	 ?>
	 <form action="xylydulieu.php" method="post">
	 	<table>
	 		<tr>
	 			<td colspan="2"><h3>Sửa sinh viên</h3></td>
	 		</tr>

	 		<tr>
	 			<td>Mã sinh viên</td>
	 			<td><input type="text" name="txt_masv" readonly = "readonly" value="<?php echo $masv ?>" size = "30"></td>
	 		</tr>

	 		<tr>
	 			<td>Họ và tên</td>
	 			<td><input type="text" name="txt_tensv" value="<?<?php echo $tensv ?>" size = "30" ></td>
	 		</tr>

	 		<tr>
	 			<td>Giới tính</td>
	 			<td>
	 				<input type="radio" name=" rd_gt" value="0" <?<?php echo $gioitinh == 0 ? 'checked' : '' ?>> Nam
	 				<input type="radio" name="rd_gt" value="1" <?<?php $gioitinh == 1 ? 'checked' : '' ?>>
	 			</td>
	 		</tr>

	 		<tr>
	 			<td>Quê quán</td>
	 			<td><input type="text" name="txt_diachi" value="<?<?php echo $diachi ?>" size = "30"></td>
	 		</tr>

	 		<tr>
	 			<td>Ngày sinh</td>
	 			<td><input type="year" name="txt_date" value="<?<?php echo $ngaysinh ?>"></td>
	 		</tr>

	 		<tr>
	 			<td>Ngành học</td>
	 			<td><input type="text" name="txt_nganhhoc" value="<?<?php echo $nganhhoc ?>" size = "30"></td>
	 		</tr>

	 		<tr>
	 			<td colspan="2" align="center">
	 				<input type="submit" name="btnSave" value="Save">
	 			</td>
	 		</tr>
	 	</table>
	 	
	 </form>
</body>
</html>