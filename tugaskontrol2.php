<?php
echo "<h2>Studi Kasus: Stok Sepatu Toko Sport</h2>";

// CONTOH IF ELSE → menentukan kondisi stok
for ($i = 100; $i <= 110; $i++) { // contoh ditampilkan 100-110 biar tidak terlalu panjang
    if ($i % 100 == 0) {
        echo "Sepatu nomor $i = DISKON <br>";
    } elseif ($i % 50 == 0) {
        echo "Sepatu nomor $i = MENIPIS <br>";
    } else {
        echo "Sepatu nomor $i = TERSEDIA <br>";
    }
}

echo "<hr>";

// CONTOH SWITCH → cek nomor sepatu tertentu
$sepatu = 150;
echo "Cek status sepatu nomor $sepatu dengan SWITCH: <br>";
switch($sepatu) {
    case 150:
        echo "Sepatu nomor 150 stoknya MENIPIS<br>";
        break;
    case 200:
        echo "Sepatu nomor 200 sedang DISKON<br>";
        break;
    default:
        echo "Sepatu tersedia<br>";
        break;
}

echo "<hr>";

// CONTOH FOR → menampilkan looping stok
echo "CONTOH FOR (sepatu 100-105): <br>";
for ($i = 100; $i <= 105; $i++) {
    echo "Sepatu nomor $i tersedia di gudang<br>";
}

echo "<hr>";

// CONTOH WHILE → menampilkan looping stok
echo "CONTOH WHILE (sepatu 995-1000): <br>";
$j = 995;
while ($j <= 1000) {
    echo "Sepatu nomor $j tersedia di gudang<br>";
    $j++;
}
?>
