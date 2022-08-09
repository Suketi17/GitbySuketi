<?php 

// 1. KHAI BÁO HẰNG
define("tenhang", "tenvalue");
echo tenhang; //Khai báo hằng
echo "<br/>";
const namehang = "namevalue";
echo namehang; //Khai báo hằng
echo "<br/>";


// // 2. KHAI BÁO KIỂU INT

$age = 100; // Khai báo
echo $age;
// $age = (int)$age; // Ép kiểu
// $check = is_int($age) // Kiểu tra số nguyên 
// // $check = is_infinite($age);
echo "<br/>";


// 3. KIỂU BOOLEAN (logic)

$kiemtra = 1; // Khai báo
// $check = (bool)$kiemtra; // Ép kiểu
// echo ($kiemtra);
// echo "<br/>";
// // $kiemtraBool = is_bool($kiemtra);
// var_dump($kiemtra);


// 4. KIỂU SỐ THỰC (float)
$sothuc = 10.5; // khai báo
$sothuc = (float)$sothuc;
// var_dump($sothuc);
// var_dump(is_float($sothuc));


// 5. KIỂU CHUỖI (string) 
$message = "Đây là chuỗi nè!"; //khai báo
// var_dump($message);
// $message = (string)$message; //ép kiểu
// $checkString = is_string($message);
// echo "<br/>";
// var_dump($checkString);


// 6. KIỂU MẢNG (array)
$arai = [];
// $arai = (array)$arai;
// $checkArr = is_array($arai);
// var_dump($arai);
// var_dump($checkArr);

// 7. KIỂU DỮ LIỆU NULL
$tennull = null;
$checkNull = is_null($tennull);
var_dump($checkNull);

// 8. Kiểu đối tượng (Object)
$dataCustomer = ["Duy Hau"];
var_dump($dataCustomer);
$dataCustomer = (object)$dataCustomer;
$checkObject = is_object($dataCustomer);
echo "<br/>";
var_dump($checkObject);
?>
