<?php
// --- Nomor 1 ---
echo "<b>Nomor 1:</b><br>";
$a = "10";
$b = "20";
echo "String '10' + '20' = " . ($a + $b) . " (otomatis dikonversi ke integer)<br><br>";

// --- Nomor 2 ---
echo "<b>Nomor 2:</b><br>";
echo "10 / 3 = " . (10/3) . " (hasil pembagian float)<br>";
echo "10 % 3 = " . (10%3) . " (sisa bagi)<br><br>";

// --- Nomor 3 (pakai script soalmu) ---
echo "<b>Nomor 3:</b><br>";
$string1='Ini adalah string sederhana';
$string2='Ini adalah string yang bisa memiliki beberapa baris';
$string3='Dia berkata: "I\'ll be back"';
$string4='Anda telah berhasil menghapus C:\\xampp\\htdocs';
$string5='Kalimat ini tidak akan pindah ke: \n baris baru';
$string6='Variabel juga tidak otomatis ditampilkan $string1 dan $string3';

// Tambahan agar string tugas1 dan tugas2 bisa digabung jadi 9080
$tugas1 = 90;
$tugas2 = 80;
$hasil = $tugas1 . $tugas2;

echo $string1; echo "<br>";
echo $string2; echo "<br>";
echo $string3; echo "<br>";
echo $string4; echo "<br>";
echo $string5; echo "<br>";
echo $string6; echo "<br>";
echo "Hasil penggabungan tugas1 dan tugas2 = " . $hasil;
?>
