<?php
// Membuat array asosiatif multidimensi berisi 3 produk e-commerce
$produk = [
    [
        "nama" => "Headphone Bluetooth",
        "kategori" => "Elektronik",
        "harga" => 250000,
        "rating" => 4.7
    ],
    [
        "nama" => "Sneakers Pria",
        "kategori" => "Fashion",
        "harga" => 320000,
        "rating" => 4.5
    ],
    [
        "nama" => "Powerbank 10000mAh",
        "kategori" => "Gadget",
        "harga" => 180000,
        "rating" => 4.8
    ]
];

// Cari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $item) {
    if ($item["harga"] > $tertinggi["harga"]) {
        $tertinggi = $item;
    }
}

// Tampilkan semua produk dalam tabel
echo "<h3>Daftar Produk E-Commerce</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; background-color: #e8f5e9; color: #1b5e20;'>";
echo "<tr style='background-color: #2e7d32; color: white;'>
        <th>Nama Produk</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Rating</th>
      </tr>";

foreach ($produk as $p) {
    echo "<tr>
            <td>{$p['nama']}</td>
            <td>{$p['kategori']}</td>
            <td>Rp " . number_format($p['harga'], 0, ',', '.') . "</td>
            <td>{$p['rating']}</td>
          </tr>";
}

echo "</table><br>";

// Cetak produk dengan harga tertinggi
echo "<h3 style='color:#d32f2f;'>Produk dengan harga tertinggi:</h3>";
echo "<div style='background-color:#ffebee; border:1px solid #c62828; padding:10px; width:50%; border-radius:8px;'>
        <b>Nama:</b> {$tertinggi['nama']} <br>
        <b>Kategori:</b> {$tertinggi['kategori']} <br>
        <b>Harga:</b> Rp " . number_format($tertinggi['harga'], 0, ',', '.') . "<br>
        <b>Rating:</b> {$tertinggi['rating']}
      </div>";
?>
