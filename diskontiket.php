<?php
function hitungTotalHarga($kelas, $jumlah_tiket) {
    $harga_ekonomi = 50000;
    $harga_bisnis = 100000;
    $harga_eksekutif = 150000;
    $total_harga = 0;

    switch ($kelas) {
        case "ekonomi":
            $total_harga = $harga_ekonomi * $jumlah_tiket;
            break;
        case "bisnis":
            $total_harga = $harga_bisnis * $jumlah_tiket;
            break;
        case "eksekutif":
            $total_harga = $harga_eksekutif * $jumlah_tiket;
            break;
        default:
            echo "Kelas tidak valid.";
    }

    return $total_harga;
}


function jenisPembayaran($total_harga) {
    $jenis_pembayaran = "";

    if ($total_harga >= 500000) {
        $jenis_pembayaran = "Transfer Bank atau Kartu Kredit";
    } elseif ($total_harga >= 100000) {
        $jenis_pembayaran = "Kartu Debit atau E-Wallet";
    } else {
        $jenis_pembayaran = "Tunai";
    }

    return $jenis_pembayaran;
}


$jumlah_tiket = 5;
$kelas = "ekonomi";


$total_harga = hitungTotalHarga($kelas, $jumlah_tiket);


if ($jumlah_tiket >= 5) {
    $diskon = 0.1 * $total_harga;
    $total_harga_diskon = $total_harga - $diskon;
} else {
    $total_harga_diskon = $total_harga;
}


$jenis_pembayaran = jenisPembayaran($total_harga_diskon);


echo "Jumlah Tiket: $jumlah_tiket<br>";
echo "Kelas: $kelas<br>";
echo "Total Harga Tiket Sebelum Diskon: Rp " . number_format($total_harga, 0, ',', '.') . "<br>";
if ($jumlah_tiket >= 5) {
    echo "Diskon (10%): Rp " . number_format($diskon, 0, ',', '.') . "<br>";
}
echo "Total Harga Tiket Setelah Diskon: Rp " . number_format($total_harga_diskon, 0, ',', '.') . "<br>";
echo "Jenis Pembayaran yang Diterima: $jenis_pembayaran<br>";
?>
