<?php
// Matriks A
$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

// Matriks B
$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// Inisialisasi matriks hasil
$C = [];

// Proses penjumlahan menggunakan looping
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Fungsi untuk menampilkan matriks dalam bentuk tabel
function tampilkanMatriks($matriks, $nama, $warna) {
    echo "<h3 style='color: $warna;'>Matriks $nama</h3>";
    echo "<table border='1' cellpadding='12' cellspacing='0' 
          style='border-collapse: collapse; text-align: center; 
          background-color: #f9f9f9; box-shadow: 0 0 10px rgba(0,0,0,0.1);
          border: 2px solid $warna;'>";
    foreach ($matriks as $baris) {
        echo "<tr>";
        foreach ($baris as $nilai) {
            echo "<td style='width:50px;'>$nilai</td>";
        }
        echo "</tr>";
    }
    echo "</table><br>";
}

// Judul halaman
echo "<h2 style='font-family: Arial; color: #333; text-align:center;'>
      Penjumlahan Matriks 3x3 Menggunakan PHP
      </h2>";

// Tampilkan matriks A, B, dan hasil C
echo "<div style='display:flex; justify-content: center; gap: 50px;'>";
echo "<div>";
tampilkanMatriks($A, "A", "#007BFF");
tampilkanMatriks($B, "B", "#28A745");
tampilkanMatriks($C, "A + B", "#DC3545");
echo "</div>";
echo "</div>";

echo "<p style='text-align:center; font-family: Arial; color: #555;'>
      Program ini menggunakan looping untuk menjumlahkan setiap elemen matriks.
      </p>";
?>
