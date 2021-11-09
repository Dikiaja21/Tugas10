<?php
//koneksi ke functions.php
require 'functions.php';
?>

<!DOCTYPE htnl>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Soal Level 3 No 10</title>
</head>

<body>
    <h1>Toko Arkademy</h1>

    <a href="tambah.php">Tambah Data</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Keterangam</th>
            <th>harga</th>
            <th>jumlah</th>
            <th>aksi</th>
        </tr>


        <?php foreach ($result as $b) : ?>
            <tr>
                <td><?= $b["nama"]; ?></td>
                <td><?= $b["ket"]; ?></td>
                <td><?= $b["harga"]; ?></td>
                <td><?= $b["qty"]; ?></td>
                <td>
                    <a href="edit.php?id=<?= $b["id"]; ?>">edite | </a>
                    <a href="hapus.php?id=<?= $b["id"]; ?>">delet</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>