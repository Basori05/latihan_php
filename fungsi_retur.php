<?php
// Membuat fungsi dengan 2 parameter
function jumlah($parameter1, $parameter2) {
    // proses penjumlahan
    $nilai_akhir = $parameter1 + $parameter2;
    return $nilai_akhir; // hasil dikembalikan
}

// Memanggil fungsi dan menampilkan hasil
$hasil = jumlah(10, 20);
echo "Hasil penjumlahan 10 + 20 = " . $hasil;
?>
