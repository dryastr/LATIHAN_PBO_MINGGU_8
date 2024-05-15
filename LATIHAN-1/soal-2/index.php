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

    function setJumlahRoda($x)
    {
        $this->jumlahRoda = $x;
    }

    function setBahanBakar($x)
    {
        $this->bahanBakar = $x;
    }
}

// Membuat objek Kendaraan Toyota Yaris
$toyotaYaris = new Kendaraan();
$toyotaYaris->setMerek('Toyota Yaris');
$toyotaYaris->setJumlahRoda(4);
$toyotaYaris->setBahanBakar('Premium');
$toyotaYaris->setHarga(160000000);

// Membuat objek Kendaraan Honda Scoopy
$hondaScoopy = new Kendaraan();
$hondaScoopy->setMerek('Honda Scoopy');
$hondaScoopy->setJumlahRoda(2);
$hondaScoopy->setBahanBakar('Premium');
$hondaScoopy->setHarga(13000000);

// Membuat objek Kendaraan Isuzu Panther
$isuzuPanther = new Kendaraan();
$isuzuPanther->setMerek('Isuzu Panther');
$isuzuPanther->setJumlahRoda(4);
$isuzuPanther->setBahanBakar('Solar');
$isuzuPanther->setHarga(170000000);

// Menampilkan informasi setiap kendaraan
echo "Kendaraan ".$toyotaYaris->merek.", memiliki ".$toyotaYaris->jumlahRoda." roda, berbahan bakar ".$toyotaYaris->bahanBakar." dan harganya Rp ".$toyotaYaris->harga.".<br>";
echo "Kendaraan ".$hondaScoopy->merek.", memiliki ".$hondaScoopy->jumlahRoda." roda, berbahan bakar ".$hondaScoopy->bahanBakar." dan harganya Rp ".$hondaScoopy->harga.".<br>";
echo "Kendaraan ".$isuzuPanther->merek.", memiliki ".$isuzuPanther->jumlahRoda." roda, berbahan bakar ".$isuzuPanther->bahanBakar." dan harganya Rp ".$isuzuPanther->harga.".<br>";
?>
