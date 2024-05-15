<?php
include 'class-kendaraan.php';

$kendaraan1 = new Kendaraan();
$kendaraan1->setMerek('Yamaha MIO');
$kendaraan1->setHarga(10000000);

echo 'Harga dari '.$kendaraan1->bacaMerek().' adalah Rp. '.$kendaraan1->bacaHarga();
?>
