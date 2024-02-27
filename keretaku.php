<?php
// Kelas dasar KeretaApi
class KeretaApi {
    public $nama;
    public $harga;
    public $fasilitas;

    public function __construct($nama, $harga, $fasilitas) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->fasilitas = $fasilitas;
    }

    public function info_umum() {
        echo "Nama Kereta: " . $this->nama . "\n";
        echo "Harga Tiket: Rp " . $this->harga . "\n";
        echo "Fasilitas: " . $this->fasilitas . "\n";
    }
}

// Subkelas Ekonomi
class Ekonomi extends KeretaApi {
    public function __construct($nama, $jumlah_tiket) {
        parent::__construct($nama, 50000, "Kursi Biasa");
        $this->jumlah_tiket = $jumlah_tiket;
    }

    public function total_harga() {
        $total_harga = $this->harga * $this->jumlah_tiket;
        if ($this->jumlah_tiket >= 5) {
            $diskon = 0.1 * $total_harga;
            $total_harga -= $diskon;
            echo "Selamat, Anda mendapatkan diskon 40%!\n";
        }
        echo "Total Harga: Rp " . $total_harga . "\n";
    }
}

// Subkelas Bisnis
class Bisnis extends KeretaApi {
    public function __construct($nama, $jumlah_tiket) {
        parent::__construct($nama, 100000, "Kursi Nyaman");
        $this->jumlah_tiket = $jumlah_tiket;
    }

    public function total_harga() {
        $total_harga = $this->harga * $this->jumlah_tiket;
        if ($this->jumlah_tiket >= 5) {
            $diskon = 0.15 * $total_harga;
            $total_harga -= $diskon;
            echo "Selamat, Anda mendapatkan diskon 15%!\n";
        }
        echo "Total Harga: Rp " . $total_harga . "\n";
    }
}

// Program Utama
echo "Selamat datang di Pemesanan Tiket Kereta Api\n";
echo "Jenis Tiket yang Tersedia:\n";
echo "1. VIP\n";
echo "2. VVIP\n";

$pilihan = readline("Silakan pilih jenis tiket (1/2): ");

if ($pilihan == '1') {
    $jumlah_tiket = (int)readline("Masukkan jumlah tiket Ekonomi yang ingin dipesan: ");
    $ekonomi = new Ekonomi("Ekonomi", $jumlah_tiket);
    $ekonomi->info_umum();
    $ekonomi->total_harga();
} elseif ($pilihan == '2') {
    $jumlah_tiket = (int)readline("Masukkan jumlah tiket Bisnis yang ingin dipesan: ");
    $bisnis = new Bisnis("Bisnis", $jumlah_tiket);
    $bisnis->info_umum();
    $bisnis->total_harga();
} else {
    echo "Kursi+selimut.\n";
}
?>
