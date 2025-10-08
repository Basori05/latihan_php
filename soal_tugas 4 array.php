<?php
// Membuat array 2 dimensi 3x3 berisi angka acak 1–9
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
    }
}

// Menghitung total semua elemen
$total = 0;
foreach ($matriks as $baris) {
    foreach ($baris as $angka) {
        $total += $angka;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Matriks 3x3 Acak</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #e3f2fd, #bbdefb);
            text-align: center;
            padding-top: 50px;
        }
        h2 {
            color: #0d47a1;
            text-shadow: 1px 1px 2px #90caf9;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            border-radius: 12px;
            overflow: hidden;
        }
        td {
            border: 1px solid #64b5f6;
            padding: 20px 30px;
            font-size: 22px;
            background-color: #ffffff;
            color: #0d47a1;
            transition: 0.3s;
        }
        td:hover {
            background-color: #bbdefb;
            transform: scale(1.1);
            box-shadow: inset 0 0 8px rgba(0,0,0,0.2);
        }
        .total-box {
            background-color: #e8f5e9;
            border: 2px solid #43a047;
            color: #1b5e20;
            display: inline-block;
            padding: 15px 30px;
            font-size: 20px;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>

    <h2>Matriks 3x3 (Angka Acak 1–9)</h2>

    <table>
        <?php
        foreach ($matriks as $baris) {
            echo "<tr>";
            foreach ($baris as $angka) {
                echo "<td>$angka</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <div class="total-box">
        <strong>Jumlah Total Semua Elemen: <?= $total; ?></strong>
    </div>

</body>
</html>
