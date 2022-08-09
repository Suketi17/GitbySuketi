<?php 
// 9. Kiểu đối tượng (Object)
$dataCustomer = ["Duy Hau"];
var_dump($dataCustomer);
$dataCustomer = (object)$dataCustomer;
$checkObject = is_object($dataCustomer);
echo "<br/>";
var_dump($checkObject);
 ?>