<?php 

for($i=1;$i<=10;$i++){
	echo $i."<br/>";
	if ($i==5) {
		break; // Thoát khỏi vòng lặp khi thỏa mản điều kiện
	}
}
echo "<hr/>";

for($i=1;$i<=10;$i++){
	if($i==5) continue; //bỏ qua vòng lặp
	echo $i."<br/>";
}
echo"<hr/>";

die; // dừng cả chương trình phía dưới || or die("Thông báo"); 
exit; //dừng cả chương trình phía dưới || or exit ("Thông báo");


 ?>