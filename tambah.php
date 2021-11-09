<?php
//koneksi ke functions.php
require 'functions.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil di tambahkan');
                document.location.href = 'home.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal di tambahkan');
            document.location.href = 'tambah.php';
        </script>
    ";
    }
}

?>

<!DOCTYPE htnl>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Tambah data</title>
</head>

<body>
    <form method="post" action="">
        <ul>
            <li>
                <label>
                    Nama :
                    <input type="text" name="nama_produk" required>
                </label>
            </li>
            <li>
                <label>
                    keterangan :
                    <input type="text" name="keterangan" required>
                </label>
            </li>
            <li>
                <label>
                    harga :
                    <input type="number" name="harga" required>
                </label>
            </li>
            <li>
                <label>
                    jumlah :
                    <input type="number" name="jumlah" required>
                </label>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>