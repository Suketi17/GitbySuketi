<?php 
	//kết nối đến csdl
	$conn = mysqli_connect("localhost","root","","test_connect");
	if (isset($_POST['btnSave'])) {
		//lấy dữ liệu trên form -> lưu vào biến
		
		$masv = $_POST['txt_masv'];
		$tensv = $_POST['txt_tensv'];
		$gioitinh = $_POST['rd_gt'];
		$diachi = $_POST['txt_diachi'];
		$ngaysinh = $_POST['txt_ngaysinh'];
		$nganhhoc = $_POST['txt_nganhhoc'];
	}

	//truy vấn dữ liệu
	
	$sql = "UPDATE student SET fullname = '$tensv', gender = '$gioitinh', address = '$diachi', date = '$ngaysinh', specialized = '$nganhhoc' WHERE idsv = $'masv'";
	if (mysqli_query($conn,$sql)) { //nếu thành công thì chuyển đến trang chủ index.php
		head('location: index.php');
	}else{
		$result = "Cập nhập chưa thành công! ".mysqli_error($conn);
	}
 ?>