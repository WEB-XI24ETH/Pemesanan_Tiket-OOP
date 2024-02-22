<?php
class Tiket {
    public $nama_event,
           $lokasi,
           $tanggal,
           $harga,
           $jenis_tiket,
           $jumlah_tiket;

    public function __construct($nama_event = "nama event", $lokasi = "lokasi", $tanggal = "tanggal", $harga = 0, $jenis_tiket = "jenis tiket", $jumlah_tiket = 1) {
        $this->nama_event = $nama_event;
        $this->lokasi = $lokasi;
        $this->tanggal = $tanggal;
        $this->harga = $harga;
        $this->jenis_tiket = $jenis_tiket;
        $this->jumlah_tiket = $jumlah_tiket;
    }

    public function getInfoPemesanan() {
        $total_harga = $this->harga * $this->jumlah_tiket;
        $str = "Pemesanan Tiket:<br>";
        $str .= "Event: {$this->nama_event}<br>";
        $str .= "Lokasi: {$this->lokasi}<br>";
        $str .= "Tanggal: {$this->tanggal}<br>";
        $str .= "Jenis Tiket: {$this->jenis_tiket}<br>";
        $str .= "Jumlah Tiket: {$this->jumlah_tiket}<br>";
        $str .= "Total Harga: Rp. {$total_harga}<br>";
        return $str;
    }
}

$tiket1 = new Tiket("Konser Musik", "Gelora Bung Karno", "24 Februari 2024", 150000, "VIP", 2);
$tiket2 = new Tiket("Pertandingan Sepak Bola", "Stadion Utama", "25 Februari 2024", 75000, "Reguler", 5);

echo $tiket1->getInfoPemesanan() . "<br>";
echo $tiket2->getInfoPemesanan() . "<br>";
?>
