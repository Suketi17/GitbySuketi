<?php 
	//kết nối đến cơ sỡ dữ liệu
	$conn = mysqli_connect("localhost","root","","test_connect");
	//kiểm tra khi người dùng submit form
	if (isset($_POST['btnSave'])) { //lấy data trên form => lưu vào biến
		
		$masv = $_POST['txt_masv'];
		$tensv = $_POST['txt_tensv'];
		$gioitinh = $_POST['rd_gt'];
		$diachi = $_POST['txt_diachi'];
		$ngaysinh = $_POST['txt_date'];
		$nganhhoc = $_POST['txt_nganhhoc'];
	}

	//truy ván dữ liệu
	$sql = "INSERT INTO student VALUES ('$masv','$tensv','$gioitinh','$diachi','$ngaysinh','$nganhhoc')";
	if (mysqli_query($conn,$sql)){//nếu thành công thì chuyển đến trang chủ index.php 
		header('location: index.php');
	}else{
		$result = "Lỗi thêm mới " . mysqli_error($conn);
		echo $result;
	}
 ?>