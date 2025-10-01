<?php
// 1. Fungsi untuk menentukan bilangan terbesar dari 2 buah bilangan
function terbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh pemanggilan fungsi
$bil1 = 100;
$bil2 = 150;
$hasilTerbesar = terbesar($bil1, $bil2);

// 2. Tampilkan Tanggal, bulan dan Tahun sekarang dengan fungsi getdate()
$waktu = getdate();
$tanggal_getdate = $waktu['mday'] . "-" . $waktu['mon'] . "-" . $waktu['year'];

// 3. Tampilkan Tanggal, bulan dan Tahun sekarang dengan fungsi date('d-F-Y')
$tanggal_date = date('d-F-Y');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Tugas PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }
        th {
            background-color: #f2f2f2;
        }
        /* Warna baris */
        tr:nth-child(2) { background-color: red; color: white; }
        tr:nth-child(3) { background-color: yellow; color: black; }
        tr:nth-child(4) { background-color: blue; color: white; }
    </style>
</head>
<body>
    <h2>Hasil Tugas PHP</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Tugas</th>
            <th>Hasil</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Bilangan terbesar dari <?php echo "$bil1 dan $bil2"; ?></td>
            <td><?php echo $hasilTerbesar; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Tanggal sekarang (getdate)</td>
            <td><?php echo $tanggal_getdate; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Tanggal sekarang (date 'd-F-Y')</td>
            <td><?php echo $tanggal_date; ?></td>
        </tr>
    </table>
</body>
</html>
