<?php
//koneksi Database
$conn = mysqli_connect("localhost", "root", "", "arkademy");

//tampilkan data ke home
$result = mysqli_query($conn, "SELECT * FROM produk");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nama_produk = $data["nama_produk"];
    $keterangan = $data["keterangan"];
    $harga = $data["harga"];
    $jumlah = $data["jumlah"];

    //query insert data
    $query = "INSERT INTO produk VALUE ('', '$nama_produk','$keterangan','$harga','$jumlah')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama_produk = $data["nama_produk"];
    $keterangan = $data["keterangan"];
    $harga = $data["harga"];
    $jumlah = $data["jumlah"];

    //query insert data
    $query = "UPDATE produk SET
            nama = '$nama_produk',
            ket = '$keterangan',
            harga = '$harga',
            qty = '$jumlah'
            WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM produk WHERE id = $id");
    return mysqli_affected_rows($conn);
}
