<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng ký</title>
</head>
<body>
	<form action="dangky.php" method="post"></form>
	<h1>Đăng ký thành viên</h1>
	Họ và tên: <input type="text" name="username" required/><br>
	Mật khẩu: <input type="password" name="password" required/><br>
	Email: <input type="text" name="email" required/><br>
	<input type="submit" name="dangky" value="Đăng ký">
	<?php 
	// require 'xyly.php'; 
	?>
</body>
</html>

 -->

 <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css"/>
</head>
<body>

	<form method="post" action="dangky.php" class="form">
		<h2>Đăng ký thành viên</h2>

		Username: <input type="text" name="username" value="" required/><br/>

		Password: <input type="text" name="password" value="" required/><br/>

		Email: <input type="email" name="email" value="" required/><br/>

		<input type="submit" name="dangky" value="Đăng Ký"/><br/>
		<?php require 'xyly.php';?>
	</form>

</body>
</html>