<?php 
	// VÒNG LẶP FOR
// for($tenbien=gia_tri_dau;dieu_kien_dung;bieu_thuc_tang){
// 	//Câu lệnh
// }

//ví dụ 1: Vòng lặp tăng
$nubemr = 10;
$start = 1;
for($i = $start;$i<=$nubemr;$i++){
	echo "Đây là vòng lặp ".$i."<br/>";
}
echo "<hr/>";

$nubemr = 10;
$start = 1;
for($i = $start;$i<=$nubemr;$i+=3){ //tăng 3 giá trị
	echo "Đây là vòng lặp ".$i."<br/>";
}
echo "<hr/>";

//ví dụ 2: Vòng lặp giảm
$tenbien = 20;
for($j = $tenbien;$j >= 1;$j-=2){ //giảm 2 giá trị
	echo "Đây là vòng lặp giảm tù: ".$j."<br/>";
}
echo "<hr/>";

//ví dụ tính tổng
$n = 10;
$s = 0;
for($a = 1;$a<=$n;$a++){
	$s += $a;
}
	echo "Tổng S = ".$s;

?>


