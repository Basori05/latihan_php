<?php
// Membuat array 2 dimensi berisi data 3 siswa
$siswa = [
    ["Nama" => "Andi", "Matematika" => 85, "Bahasa" => 90],
    ["Nama" => "Budi", "Matematika" => 78, "Bahasa" => 88],
    ["Nama" => "Citra", "Matematika" => 92, "Bahasa" => 95]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "<h3>Nilai Bahasa siswa ke-2 (" . $siswa[1]["Nama"] . ") adalah: " . $siswa[1]["Bahasa"] . "</h3>";

// Cetak semua data dalam tabel berwarna
echo "<h3>Data Semua Siswa</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; background-color: #e0f7fa; color: #004d40;'>";
echo "<tr style='background-color: #00897b; color: white;'>
        <th>Nama</th>
        <th>Nilai Matematika</th>
        <th>Nilai Bahasa</th>
      </tr>";

// Looping untuk menampilkan data siswa
foreach ($siswa as $data) {
    echo "<tr>
            <td>" . $data["Nama"] . "</td>
            <td>" . $data["Matematika"] . "</td>
            <td>" . $data["Bahasa"] . "</td>
          </tr>";
}

echo "</table>";
?>
