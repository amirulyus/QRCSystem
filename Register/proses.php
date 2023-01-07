<?php

//code input data to database
include"db.php";
include"phpqrcode/qrlib.php";
$folderTemp = 'imageqr/';
$a = $_POST['id_matrik'];
$b = $_POST['fullname'];
$e = $_POST['department'];
$f = $_POST['level'];
$g = $_POST['branch'];
$c = $a;
$d = $a.".png";//format nama gambar qrcode


//ukuran size qrcode
$qual = 'H';
$ukuran = 10;
$padding = 10;

//call functions
QRCode :: png($c,$folderTemp.$d,$qual,$ukuran,$padding);
$sql = $conn->query("INSERT INTO details_members VALUE('$a','$b','$e','$f','$g','$d')");


echo "registeration successfully";
    echo "<meta http-equiv=refresh content=2;URL='index.php'>";

//echo"$a";
?>