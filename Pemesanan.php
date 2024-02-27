<?php

class Kereta {
    public      $nama,
                $kursi,
                $gerbong,
                $asal,
                $tujuan,
                $jadwal_keberangkatan;
    protected   $diskon = 0;
    private     $harga;

    public function __construct($nama = "null", $kursi = "null", $gerbong = "null", $asal = "null", $tujuan = "null", $jadwal_keberangkatan = "null", $harga = 0){
        $this->nama                 = $nama;
        $this->kursi                = $kursi;
        $this->gerbong              = $gerbong;
        $this->asal                 = $asal;
        $this->tujuan               = $tujuan;
        $this->jadwal_keberangkatan = $jadwal_keberangkatan;
        $this->harga                = $harga;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getInfo(){
        $str = "Kereta: {$this->nama} | Gerbong: {$this->gerbong} | Kursi: {$this->kursi} | Tujuan: {$this->tujuan} | Jadwal: {$this->jadwal_keberangkatan} | Harga: (Rp. {$this->getHarga()})";
        return $str;   
    }
} 

class Ekonomi extends Kereta {
    public $fasilitas;
    
    public function __construct($nama = "null", $kursi = "null", $gerbong = "null", $asal = "null", $tujuan = "null", $jadwal_keberangkatan = "null", $harga = 0, $fasilitas = "null"){
        parent::__construct($nama, $kursi, $gerbong, $asal, $tujuan, $jadwal_keberangkatan, $harga);
        $this->fasilitas = $fasilitas;
    }

    public function getInfo(){
        $str = "" . parent::getInfo() . " | {$this->fasilitas}";
        return $str;
    }
}

class Bisnis extends Kereta {
    public $layanan;

    public function __construct($nama = "null", $kursi = "null", $gerbong = "null", $asal = "null", $tujuan = "null", $jadwal_keberangkatan = "null", $harga = 0, $layanan = "null"){
        parent::__construct($nama, $kursi, $gerbong, $asal, $tujuan, $jadwal_keberangkatan, $harga);
        $this->layanan = $layanan;
    }

    public function getInfo(){
        $str = "" . parent::getInfo() . " | {$this->layanan}";
        return $str;
    }
}

$obj1 = new Ekonomi("Kertajaya", "12B", "Gerbong 3", "Makassar", "Pangkep", "Kamis, 14 Feb 2022 09.00 WIB", 25000, "AC");
$obj1->setDiskon(50);
echo $obj1->getInfo();

?>