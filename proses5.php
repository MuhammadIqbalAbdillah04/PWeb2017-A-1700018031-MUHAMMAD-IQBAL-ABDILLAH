<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$alamat = $_POST['Alamat'];
$harga = "1300000";

$myfile = fopen("beli5.txt", "w");
fwrite($myfile, "$name".PHP_EOL);
fwrite($myfile, "$email".PHP_EOL);
fwrite($myfile, "$alamat".PHP_EOL);
fwrite($myfile, "Total Biaya = $harga");
fclose($myfile);

echo "<script>alert('Berhasil')</script>";
include 'tugasakhir.php';
 ?>