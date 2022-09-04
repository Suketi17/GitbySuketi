<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm sinh viên</title>
</head>
<body>
	<!-- Action đóng vai trò nhận và xử lý dữ liệu khi người dùng nhập vào form và ấn nút submit để gửi thông tin.

	Method là thương thức truyền dữ liệu trong form, bao gồm 02 phương thức là POST và GET. -->
	<form action="xulydulieu.php" method="post">
		<table>
			<tr>
				<td colspan="2"><h3>Thêm sinh viên</h3></td>
			</tr>

			<tr>
				<td>Mã sinh viên</td>
				<td><input type="text" id="txt_masv" name="txt_masv" value="" size="30"></td>
			</tr>

			<tr>
				<td>Họ và tên</td>
				<td><input type="text" id="txt_tensv" name="txt_tensv" value="" size="30"></td>
			</tr>			

			<tr>
				<td>Giới tính</td>
				<td>
					<input type="radio" id="ra_gt_0" name="rd_gt" value="0">Nam
					<input type="radio" id="ra_gt_1" name="rd_gt" value="1">Nữ
				</td>
			</tr>

			<tr>
				<td>Quê quán</td>
				<td>
					<input type="text" id="txt_diachi" name="txt_diachi" value="" size="30">
				</td>
			</tr>

			<tr>
				<td>Ngày sinh</td>
				<td>
					<input type="year" id="txt_date" name="txt_date" value="" size="30">
				</td>
			</tr>

			<tr>
				<td>Ngành học</td>
				<td>
					<input type="text" id="txt_nganhhoc" name="txt_nganhhoc" value="" size="30">
				</td>
			</tr>

			<tr>
				<td colspan="2" align="center">
					<input type="submit" id="btn" name="btnSave" value="Save">
				</td>
			</tr>

		</table>
	</form>
</body>
</html>