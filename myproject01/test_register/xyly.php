<?php
header('Content-Type: text/html; charset=utf-8');

// Kết nối CSDL
$conn = mysqli_connect('localhost', 'root', '', 'hau_db04') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if (isset($_POST['dangky']))
{

$username = isset($_POST['username']) ? mysql_escape_string($_POST['username']) : '';

$password = isset($_POST['password']) ? md5($_POST['password']) : '';

$email = isset($_POST['email']) ? mysql_escape_string($_POST['email']) : '';


// Kiểm tra username hoặc email trong CSDL có trùng không
$sql = "SELECT * FROM hau_table04 WHERE username = '$username' OR email = '$email'";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{

// Sử dụng javascript để thông báo
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="dangky.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO hau_table04 (username, password, email) VALUES ('$username','$password', '$email')";

if (mysqli_query($conn, $sql)){

echo "Username: ".$_POST['username']."<br/>";
echo "Password: " .$_POST['password']."<br/>";
echo "Email: ".$_POST['email']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="dangky.php";</script>';
}
}
}
?>