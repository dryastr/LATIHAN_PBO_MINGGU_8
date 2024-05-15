<?php
include 'class-kendaraan.php';

$kendaraan1 = new Kendaraan('Yamaha MIO', 10000000);
// Karena properti merek bersifat private, Anda perlu menggunakan metode bacaMerek() untuk mengaksesnya
echo 'Nama merek: '.$kendaraan1->bacaMerek();
?>
