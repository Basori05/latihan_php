<?php
// Program menampilkan daftar stok sepatu dari nomor 100 sampai 1000
// Studi kasus: toko sepatu hanya memiliki stok dari nomor 100 hingga 1000

echo "<h2>Daftar Stok Sepatu Toko Sport</h2>";
echo "<p>Berikut adalah daftar stok sepatu yang tersedia (nomor 100 - 1000):</p>";

// Gunakan perulangan FOR
for ($stok = 100; $stok <= 1000; $stok++) {

    // Menampilkan stok sepatu
    echo "Sepatu nomor ke-$stok tersedia di gudang.<br>";
}

echo "<hr>";
echo "Total stok sepatu yang tersedia dari nomor 100 sampai 1000 adalah: " . (1000 - 100 + 1) . " pasang.";
?>
