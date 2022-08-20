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
		$evenNubemr.=$i." "; //NỐI BIẾN 
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


//-----------------------------------------------------------------//
// //VONG LẶP WHITE
// while (dieu_kien_dung) {	//cú pháp
// 	//danh sách câu lệnh
// }

$i = 0; // Gán giá trị ban đầu
while ($i<=5) {
	echo "Vòng lặp thứ: ".$i."<br/>";
	$i++; // Xử lý điều kiện thoát vòng lặp
}
echo "<hr/>";
/*
	$i = 0 -> Kiểm tra đúng -> Chạy vòng lặp -> $i = 0
	$i = 1 -> Kiểm tra đúng -> Chạy vòng lặp -> $i = 1
	$i = 2 -> Kiểm tra đúng -> Chạy vòng lặp -> $i = 2
	$i = 3 -> Kiểm tra đúng -> Chạy vòng lặp -> $i = 3
	$i = 4 -> Kiểm tra đúng -> Chạy vòng lặp -> $i = 4
	$i = 5 -> Kiểm tra đúng -> Chạy vòng lặp -> $i = 5
	$i = 6 -> Kiểm tra ko đúng -> thoát vòng lặp
 */

//--> Ví dụ: Tính tổng: S = 1+2+3+..+n
$i = 1;
$n = 30;
$s = 0;
while ($i<=$n) {
	
	$s+=$i; 
	$i++; // đặt sau tính tổng
	
}
echo "Tổng = ".$s. "<br/>";
echo "<hr/>";

//--> Ví dụ: Tính tổng S = 1/2 + 1/4 + 1/6 + ... + 1/n
//Điều kiện : 1/n < 0.0001
$n = 5;
$s = 0;
while (1/$n>=0.001) {
	$s+=1/$n;
	$n+=2;
}
echo "Tổng = ".$s;
echo "<hr/>";

//-----------------------------------------------------------------//
// Vòng Lặp Do White (Chạy trước rồi mới quay lại kiểm tra điều kiện)
$i = 1;
do {
	// $i++; //Tăng tới 11
	echo "Vòng lặp thứ: " .$i."<br/>";
	$i++; // Tăng tới 10
} while ($i<=10);
echo "<hr/>";

?>


