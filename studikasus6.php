<?php
// 6. Studi Kasus Apoteker di Mall
$jenisObat = "keras";  // pilihan: keras, terbatas, bebas
$adaResep = false;     // true jika ada resep dokter, false jika tidak

if ($jenisObat == "keras") {
    if ($adaResep) {
        echo "Obat keras dapat diberikan karena ada resep dokter.<br>";
    } else {
        echo "Obat keras TIDAK dapat diberikan tanpa resep dokter.<br>";
    }
} elseif ($jenisObat == "terbatas") {
    echo "Obat bebas terbatas diberikan dengan aturan pakai dari apoteker.<br>";
} elseif ($jenisObat == "bebas") {
    echo "Obat bebas dapat diberikan langsung tanpa resep.<br>";
} else {
    echo "Jenis obat tidak dikenal.<br>";
}
?>