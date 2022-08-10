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
	// echo "Tổng S = ".$s; NẾU ĐỂ ECHO TRONG NÀY SẼ CHẠY TỔNG S TỪ ... ĐẾN ...
}
echo "Tổng S = ".$s;

echo "<hr/>";

// Đếm số chẵn lẻ
$start = 1;
$end = 43;

$evenNubemr = null; //số chẵn
$oddNubemr = null; //số lẻ

$evenCount = 0; //đếm số chẵn
$oddCount = 0; //đếm số lẻ


for($i=$start;$i<=$end;$i++){
	if($i%2==0){  // kiểm tra chẵn - lẻ
		// echo "Số chẵn ".$i."<br/>";
		$evenNubemr.=$i." ";
		$evenCount++;
	}else{
		// echo "Số lẻ ".$i."<br/>";
		$oddNubemr.=$i." ";
		$oddCount++;
	}
		
}
if($evenCount>0){
	echo "Tìm thấy ".$evenCount." số chẵn là: ".$evenNubemr."<br/>";
}else{
	echo "Không tìm thấy số chẵn nào cả! <br/>";
}

if ($oddCount>0) {
	echo "Tìm thấy ".$oddCount." số lẻ là: ".$oddNubemr."<br/>";
}else{
	echo "Không tìm thấy số lẻ nào cả! <br/>";

}



echo "<hr/>";

?>


