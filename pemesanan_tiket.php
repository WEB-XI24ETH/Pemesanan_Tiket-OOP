<?php

class Kereta
{
    public $nama_kereta,
        $gerbong,
        $asal,
        $tujuan,
        $jadwal_keberangkatan;
    protected $diskon = 0;
    private $harga;

    public function __construct($nama_kereta = "null", $gerbong = "null", $asal = "null", $tujuan = "null", $jadwal_keberangkatan = "null", $harga = 0)
    {
        $this->nama_kereta          = $nama_kereta;
        $this->gerbong              = $gerbong;
        $this->asal                 = $asal;
        $this->tujuan               = $tujuan;
        $this->jadwal_keberangkatan = $jadwal_keberangkatan;
        $this->harga                = $harga;
    }

    public function getLabel()
    {
        return "$this->nama_kereta, $this->gerbong";
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getInfoProduk()
    {
        $str = "{$this->nama_kereta} | {$this->getLabel()} (Rp. {$this->getHarga()}) - Asal: {$this->asal}, Tujuan: {$this->tujuan}, Jadwal: {$this->jadwal_keberangkatan}";
        return $str;
    }
}

class Bisnis extends Kereta
{
    public $fasilitas;

    public function __construct($nama_kereta = "null", $gerbong = "null", $asal = "null", $tujuan = "null", $jadwal_keberangkatan = "null", $harga = 0, $fasilitas = "")
    {
        parent::__construct($nama_kereta, $gerbong, $asal, $tujuan, $jadwal_keberangkatan, $harga);
        $this->fasilitas = $fasilitas;
    }

    public function getInfoProduk()
    {
        $str = "Bisnis : " . parent::getInfoProduk() . " - Fasilitas: {$this->fasilitas}";
        return $str;
    }
}

class Ekonomy extends Kereta
{
    public $pelayanan;

    public function __construct($nama_kereta = "null", $gerbong = "null", $asal = "null", $tujuan = "null", $jadwal_keberangkatan = "null", $harga = 0, $pelayanan = "")
    {
        parent::__construct($nama_kereta, $gerbong, $asal, $tujuan, $jadwal_keberangkatan, $harga);
        $this->pelayanan = $pelayanan;
    }

    public function getInfoProduk()
    {
        $str = "Ekonomy : " . parent::getInfoProduk() . " - Pelayanan: {$this->pelayanan}";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Kereta $kereta)
    {
        $str = $kereta->getInfoProduk();
        return $str;
    }
}

$objBisnis = new Bisnis("KAI Bisnis", "Gerbong 1", "Jakarta", "Bandung", "Senin 2022-01-01 08:00 WIB", 150000, "AC, WiFi");
$objEkonomy = new Ekonomy("KAI Ekonomy", "Gerbong 2", "Surabaya", "Yogyakarta", "Selasa 2022-01-02 10:30 WIB", 80000, "Makanan Ringan");

$cetakInfoProduk = new CetakInfoProduk();
echo $cetakInfoProduk->cetak($objBisnis);
echo "<br>";
echo $cetakInfoProduk->cetak($objEkonomy);
