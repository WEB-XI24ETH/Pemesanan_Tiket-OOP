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

class CetakInfoProduk
{
    public function cetak(Kereta $kereta)
    {
        $str = $kereta->getInfoProduk();
        return $str;
    }
}

$obj = new Kereta("KAI", "Gerbong 1", "makassar", "barru", "kamis 2020-05-31 23:48 WIB", 100000);

$cetakInfoProduk = new CetakInfoProduk();
echo $cetakInfoProduk->cetak($obj);
