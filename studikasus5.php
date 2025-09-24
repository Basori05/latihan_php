<?php
// 5. Diskon Belanja
$totalBelanja = 120000;
if ($totalBelanja > 100000) {
    $diskon = $totalBelanja * 0.1;
    echo "Anda mendapat diskon Rp$diskon<br>";
} else {
    echo "Belanja Anda Rp$totalBelanja (tidak dapat diskon)<br>";
}
?>