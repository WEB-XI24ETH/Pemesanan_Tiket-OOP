<?php
// Membuat suatu class
class pemesanantiket {

    public  $tujuan, $dari_mana, $jam_keberangkatan, $nomor_gerbong, $nomor_kursi;
    private $harga;
    protected $diskon=0;

    public function __construct($tujuan= "tujuan", $dari_mana= "dari_mana", $jam_keberangkatan= "jam_keberangkatan", $nomor_gerbong= "nomor_gerbong", $nomor_kursi= "nomor_kursi") {
        $this->tujuan             = $tujuan;
        $this->dari_mana          = $dari_mana;
        $this->$jam_keberangkatan = $jam_keberangkatan;
        $this->$nomor_gerbong     = $nomor_gerbong;
        $this->$nomor_kursi       = $nomor_kursi;
    }

    public function getharga() {
        return "$this->tujuan, $this->dari_mana";
    }
    // Metode untuk mendapatkan informasi produk secara keseluruhan
    public function getInfokeberangkatan() {
        $str = "{$this->jam_keberangkatan} | {$this->getharga()} (Rp. {$this->harga})";
        return $str;
    }
}
class Cetaktiket {
    // Metode untuk mencetak informasi produk
    public function cetak( tiket $tiket){
        $str = "{$tiket->tujuan} | {$tiket->getharga()} (Rp. {$tiket->harga})";
        return $str;
}
}
class bisnis extends tiket {
    // Properti tambahan kelas Komik
    public $jmlhtiket;
    // Konstruktor kelas Komik
    public function __construct($tujuan= "tujuan", $dari_mana= "dari_mana", $jam_keberangkatan= "jam keberangkatan", $nomor_gerbong= "nomor gerbong", $nomor_kursi= "nomor kursi", $jmlhtiket = 0 )
    {
        // Memanggil konstruktor kelas Produk menggunakan parent::__construct()
        parent::__construct($tujuan, $dari_mana , $jam_keberangkatan, $nomor_gerbong, $nomor_kursi);
        $this->jmlhtiket = $jmlhtiket;
    }
    // Override metode getInfoProduk() untuk memberikan informasi khusus Komik
    public function getInfokeberangkatan(){
        // parent::getInfoProduk maksudnya dia adalah methode static
        // parent artinya adalah untuk mengambil property atau methode 
        $str = "bisnis : " . parent::getInfokeberangkatan() . " - {$this->jmlhtiket} tiket.";
        return $str;
    }
}
class ekonomi extends tiket {
    // Properti tambahan kelas Game
    public $waktukeberngkatan;
    // Konstruktor kelas Game
    public function __construct($tujuan= "tujuan", $penulisdari_mana= "penulisdari mana", $jam_keberangkatan= "jam keberangkatan", $nomor_gerbong= "nomor gerbong", $nomor_kursi= "nomor kursi", $waktukeberngkatan = 0 )
    {
        parent::__construct($tujuan, $dari_mana , $jam_keberangkatan);
        $this->waktukeberangkatan = $waktukeberngkatan;
    }
    // Override metode getInfoProduk() untuk memberikan informasi khusus Game
    public function getInfokeberangkatan() {
        $str = "ekonomi : " . parent::getInfokeberangkatan() . " - {$this->waktukeberangkatan} Jam.";
        return $str ;
    }
}
$pemesanantiket1 = new bisnis("jakarta", "Makassar", "07.00", 2);
$pemesanantiket2 = new ekonomi("papua", "sumatra", "15.00",4);
// Pemanggilan metode getInfoProduk() untuk mendapatkan informasi produk
echo $pemesanantiket1->getInfokeberangkatan();
echo "<br>" ;
echo $pemesanantiket2->getInfokeberangkatan();
echo "<br>" ;
echo "<hr>";
}
?>