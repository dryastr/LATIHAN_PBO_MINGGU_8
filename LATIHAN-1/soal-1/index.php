<?php
class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;

    function statusHarga()
    {
        if ($this->harga > 50000000) 
            $status = 'Mahal';
        else 
            $status = 'Murah';
        
        return $status;
    }

    function setMerek($x)
    {
        $this->merek = $x;
    }

    function setHarga($x)
    {
        $this->harga = $x;
    }

    function getMerek()
    {
        return $this->merek;
    }

    function getHarga()
    {
        return $this->harga;
    }
}

$kendaraan1 = new Kendaraan();
$kendaraan1->setMerek('Yamaha MIO');
$kendaraan1->setHarga(10000000);

echo 'Harga dari '.$kendaraan1->getMerek().' adalah Rp. '.$kendaraan1->getHarga();
?>
