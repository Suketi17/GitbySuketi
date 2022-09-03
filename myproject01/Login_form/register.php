<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="register_stype.css">
	<title>Đăng ký</title>
</head>
<body>
	<form action="register.php" method="post" class="register_class">
		<h1>Đăng ký thành viên</h1>

			<input type="text" name="username" placeholder="Username" required> 

			<!-- // placeholder là hiển thị chữ vào trong ô -->
			<input type="text" name="password" placeholder="Password" required>

			<input type="text" name="email" placeholder="Email" required>

			<input type="text" name="address" placeholder="Địa chỉ" required>

			<input type="text" name="phonenumber" placeholder="Số điện thoại" required>

			<input type="submit" name="register" value="Register">
			 <!-- // value "Register" là hiển thị chử Register trên nút -->
			
			<?php require 'handle.php'; ?>



	</form>
</body>
</html>