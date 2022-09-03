<?php 
	header('Conten-Type: text/html; charest = utf-8');

	$conn = mysqli_connect('localhost','root','','sale_db') or die('Lỗi kết nối!');
		mysqli_set_charset($conn, "utf8");

	//dùng isset để kiểm tra Form
	if (isset($_POST['register'])) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$address = trim($_POST['address']);
		$phonenumber = trim($_POST['phonenumber']);

		if (empty($username)) {
			array_push($error, "Username is required");
		}

		if (empty($password)) {
			array_push($error, "Tow password do not match");
		}

		if (empty($email)) {
			array_push($error, "Email is required");
		}

		if (empty($address)) {
			array_push($error, "Address is required");
		}

		if (empty($phonenumber)) {
			array_push($error, "Phone number is required");
		}

		// Kiểm tra usernam hoặc email có bị trùng hay không?
		$sql = "SELECT * FROM sale_table WHERE username = '$username' OR email = '$email'";

		//thực thi câu truy vấn
		$result = mysqli_query($conn, $sql);

		//Nếu kết quả > 1 thì nghĩa là username or email đã tồn tại trong DB
		if (mysqli_num_rows($result) > 0) {
			echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';

			// Dừng chương trình
			die ();
		}else{

			$sql = "INSERT INTO sale_table (username, password, email, address, phonenumber) VALUES ('$username','$password','$email','$address','phonenumber')";
			echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="register.php";</script>';

			// header("location: /index.php");


			if (mysqli_query($conn, $sql)) {
				echo "Tên đăng nhập: " . $_POST['username']."<br/>";
				echo "Mật khẩu: " .$_POST['password']."<br/>";
				echo "Email đăng nhập: " . $_POST['email']."<br/>";
				echo "Địa chỉ: " .$_POST['address']."<br/>";
				echo "sdt: " .$_POST['phonenumber']."<br/>";

			}else{
				echo 'script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
				}
			}
		
	}

	

 ?>