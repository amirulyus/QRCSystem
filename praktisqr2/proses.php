<?php

//code input data to database
include"koneksi.php";
include"phpqrcode/qrlib.php";
$folderTemp = 'imageqr/';
$a = $_POST['id_matrik'];
$b = $_POST['fullname'];
$c = $a;
$d = $a.".png";//format nama gambar qrcode
$e = $_POST['department'];
$f = $_POST['level'];
$g = $_POST['branch'];

//ukuran size qrcode
$qual = 'H';
$ukuran = 10;
$padding = 10;

//call functions
QRCode :: png($c,$folderTemp.$d,$qual,$ukuran,$padding);
$sql = $conn->query("INSERT INTO details_members VALUE('$a','$b','$d','$e','$f','$g')");

return('http://localhost/QRCSystem/');
//if($sql){
//	echo"Berjaya";
//}else{
//	echo"gagal";
//	die($conn->error);
//}

//echo"$a";
?>