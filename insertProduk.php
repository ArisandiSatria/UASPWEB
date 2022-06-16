<?php

require_once("db.php");

$nama = $_POST["nama"];
$harga = $_POST["harga"];
$stok = $_POST["stok"];
$keterangan = $_POST["keterangan"];
$query = "INSERT INTO produk (nama_produk, harga_produk, stok_produk, keterangan) VALUES ('" . $nama . "', '" . $harga . "', '" . $stok . "', '" . $keterangan . "')";

mysqli_query($conn, $query);

?>