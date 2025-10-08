<?php
// Membuat array 2 dimensi berisi data buah
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "<h3>Nama buah pertama: " . $buah[0][0] . "</h3>";

// 2. Hitung total nilai stok * harga untuk semua buah
$total = 0;
foreach ($buah as $b) {
    $subtotal = $b[1] * $b[2];
    $total += $subtotal;
}

// Tampilkan hasil perhitungan dalam tabel berwarna
echo "<h3>Data Buah dan Total Nilai</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; background-color: #fff3e0; color: #e65100;'>";
echo "<tr style='background-color: #ef6c00; color: white;'>
        <th>Nama Buah</th>
        <th>Harga Satuan</th>
        <th>Stok</th>
        <th>Total Nilai (Harga x Stok)</th>
      </tr>";

foreach ($buah as $b) {
    $subtotal = $b[1] * $b[2];
    echo "<tr>
            <td>$b[0]</td>
            <td>Rp " . number_format($b[1], 0, ',', '.') . "</td>
            <td>$b[2]</td>
            <td>Rp " . number_format($subtotal, 0, ',', '.') . "</td>
          </tr>";
}

echo "<tr style='background-color: #ffe0b2; font-weight: bold;'>
        <td colspan='3' align='right'>Total Keseluruhan:</td>
        <td>Rp " . number_format($total, 0, ',', '.') . "</td>
      </tr>";

echo "</table>";
?>
