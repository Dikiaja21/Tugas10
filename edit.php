<?php
//koneksi ke functions.php
require 'functions.php';

//ambil data di URL
$id = $_GET["id"];

//query data mahasiswa
$barang = query("SELECT * FROM produk WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'home.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
        </script>
    ";
    }
}

?>

<!DOCTYPE htnl>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit data</title>
</head>

<body>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?= $barang["id"]; ?>">
        <ul>
            <li>
                <label>
                    Nama :
                    <input type="text" name="nama_produk" value="<?= $barang["nama"]; ?>">
                </label>
            </li>
            <li>
                <label>
                    keterangan :
                    <input type="text" name="keterangan" value="<?= $barang["ket"]; ?>">
                </label>
            </li>
            <li>
                <label>
                    harga :
                    <input type="number" name="harga" value="<?= $barang["harga"]; ?>">
                </label>
            </li>
            <li>
                <label>
                    jumlah :
                    <input type="number" name="jumlah" value="<?= $barang["qty"]; ?>">
                </label>
            </li>
            <li>
                <button type="submit" name="submit">Edit Data</button>
            </li>
        </ul>
    </form>
</body>

</html>