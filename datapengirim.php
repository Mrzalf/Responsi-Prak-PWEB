<?php 
    $fp = fopen("data.txt", "r");

    echo "<table border='0'>";

    while ($isi = fgets($fp)) {
        $pisah = explode('|', $isi);
        echo "<tr><td>Tanggal </td><td>: $pisah[0] </td></tr>";
        echo "<tr><td>Nama Lengkap </td><td>: $pisah[1] </td></tr>";
        echo "<tr><td>No Handphone </td><td>: $pisah[2] </td></tr>";
        echo "<tr><td>Nama Barang </td><td>: $pisah[3] </td></tr>";
        echo "<tr><td>Alamat </td><td>: $pisah[4] </td></tr>";
        echo "<tr><td>Jarak </td><td>: $pisah[5] </td></tr>";
        echo "<tr><td>Biaya Pengiriman </td><td>: $pisah[6] </td></tr>";
        echo "<tr><td><br></td><td><br></td></tr>";
    }
    echo "</table>";
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pengirim</title>
    <style type="text/css">
        * {
            text-decoration: none;
        }
        h3 {
            font-family: sans-serif;
            text-align: center;
        }
    </style>
</head>
<body>
    <h3><a href="index.php">... Back To Home ...</h3>
</body>
</html>