<?php
// Program menampilkan stok sepatu 100 - 1000 dalam bentuk tabel berwarna

echo "<h2>Daftar Stok Sepatu Toko Sport</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse; width:80%; text-align:center;'>";

// Header tabel
echo "<tr style='background-color: #333; color: white;'>
        <th>No</th>
        <th>Nomor Sepatu</th>
        <th>Status Stok</th>
      </tr>";

// Perulangan dari 100 sampai 1000
$no = 1;
for ($i = 100; $i <= 1000; $i++) {
    
    // Tentukan status stok
    if ($i % 100 == 0) {
        $status = "DISKON";
        $warna = "#4CAF50"; // hijau
    } elseif ($i % 50 == 0) {
        $status = "MENIPIS";
        $warna = "#FFC107"; // kuning
    } else {
        $status = "TERSEDIA";
        $warna = "#2196F3"; // biru
    }

    // Cetak baris tabel
    echo "<tr style='background-color: $warna; color: white;'>
            <td>$no</td>
            <td>Sepatu nomor $i</td>
            <td><b>$status</b></td>
          </tr>";
    $no++;
}

echo "</table>";
echo "<p><b>Total stok sepatu dari nomor 100 sampai 1000 adalah: " . (1000 - 100 + 1) . " pasang.</b></p>";
?>
