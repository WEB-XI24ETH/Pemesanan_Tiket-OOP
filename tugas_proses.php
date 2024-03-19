<!DOCTYPE html>
<html>

<head>
    <title>Input Transaksi</title>
</head>

<body>

    <h1 class="h1">INPUT TRANSAKSI</h1>
    <form action="" method="post">
        <div class="content">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required><br>
            <label for="jumlah">Jumlah:</label>
            <input type="number" name="jumlah" required><br>
            <label for="diskon">Diskon:</label>
            <input type="number" name="diskon" required><br>
            <label for="harga">Harga Satuan:</label>
            <input type="number" name="harga" required><br>
        </div><br>
        <input class="button" type="submit" value="Hitung Total">
        <input class="button" type="reset" value="BATAL">
    </form>

    <?php
    $totalTransaksi = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["nama"]) && isset($_POST["jumlah"]) && isset($_POST["diskon"]) && isset($_POST["harga"])) {
            $nama = $_POST["nama"];
            $jumlah = $_POST["jumlah"];
            $diskon = $_POST["diskon"];
            $harga = $_POST["harga"];

            echo "<h2>Transaksi</h2>";
            echo "<p>Nama: $nama</p>";
            echo "<p>Jumlah: $jumlah</p>";
            echo "<p>Diskon: $diskon</p>";
            echo "<p>Harga Satuan: $harga</p>";

            // Menghitung total transaksi untuk setiap transaksi
            $totalTransaksi = ($jumlah * $harga) - $diskon;

            // Menghitung total semua transaksi
            echo "<h2>Total Hasil Transaksi</h2>";
            echo "<p>Total: $totalTransaksi</p>";
        } else {
            echo "Mohon lengkapi semua informasi transaksi.";
        }
    }
    ?>
</body>

</html>