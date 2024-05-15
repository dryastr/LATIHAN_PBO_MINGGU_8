<?php
class Kendaraan {
    protected $jumlahRoda;
    public $warna;
    public $bahanBakar;
    public $harga;
    private $merek;

    function statusHarga() {
        if ($this->harga > 50000000)
            $status = 'Mahal';
        else
            $status = 'Murah';
        return $status;
    }

    function setMerek($x) {
        $this->merek = $x;
    }

    function setHarga($x) {
        $this->harga = $x;
    }

    function bacaMerek() {
        return $this->merek;
    }

    function bacaHarga() {
        return $this->harga;
    }

    function __construct($x, $y) {
        $this->merek = $x;
        $this->harga = $y;
    }
}
?>
