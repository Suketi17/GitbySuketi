<?php 
	$conn = mysqli_connect("localhost","root","","hau_db01");
	// mysql_select_db("hau_db01");
	$qr = mysqli_query($conn, "SELECT * FROM hau_table01");
	if (!$qr) {
		die("X");
	}
	echo "O";
	
	// $dbhost = "localhost";
	// $dbuser = "root";
	// $dbpass = "";
	// $dbname = "hoc_php";
	// $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	// $query = mysqli_query($conn,"SELECT * FROM hau_table01");
	// if (!$conn) {
	// 	die("Connection faied: " .mysqli_connect_error());
		
	// }
	// echo "Connection successfully";


 ?>
