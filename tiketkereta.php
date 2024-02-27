<?php
// Superclass KeretaApi
class KeretaApi {
    private $nama;
    private $harga;

    // Constructor
    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    // Getter untuk nama kereta
    public function getNama() {
        return $this->nama;
    }

    // Getter untuk harga tiket
    public function getHarga() {
        return $this->harga;
    }
}

// Subclass Ekonomi yang mewarisi dari KeretaApi
class Ekonomi extends KeretaApi {
    private $fasilitas;

    // Constructor
    public function __construct($nama, $harga, $fasilitas) {
        // Memanggil constructor dari superclass (KeretaApi)
        parent::__construct($nama, $harga);
        $this->fasilitas = $fasilitas;
    }

    // Metode untuk menampilkan informasi tiket
    public function displayInfo() {
        echo "Tiket Kereta Ekonomi\n <br>"; 
        echo "Nama Kereta: " . $this->getNama() . "\n <br>";
        echo "Harga Tiket: " . $this->getHarga() . "\n <br>";
        echo "Fasilitas: " . $this->fasilitas . "\n <br> <br>";
    }
}

// Subclass Bisnis yang mewarisi dari KeretaApi
class Bisnis extends KeretaApi {
    private $fasilitas;

    // Constructor
    public function __construct($nama, $harga, $fasilitas) {
        // Memanggil constructor dari superclass (KeretaApi)
        parent::__construct($nama, $harga);
        $this->fasilitas = $fasilitas;
    }

    // Metode untuk menampilkan informasi tiket
    public function displayInfo() {
        echo "Tiket Kereta Bisnis\n";
        echo "Nama Kereta: " . $this->getNama() . "\n <br>";
        echo "Harga Tiket: " . $this->getHarga() . "\n<br>";
        echo "Fasilitas: " . $this->fasilitas . "\n<br>";
    }
}

// Kelas utama untuk pengujian
class Main {
    public static function main() {
        // Membuat objek Tiket Ekonomi
        $ekonomi = new Ekonomi("Argo Parahyangan", 100000, "AC");

        // Membuat objek Tiket Bisnis
        $bisnis = new Bisnis("Gajayana", 200000, "Kursi Reclining");

        // Menampilkan informasi tiket
        $ekonomi->displayInfo();
        echo "\n";
        $bisnis->displayInfo();
    }
}

// Panggil fungsi main
Main::main();
?>
