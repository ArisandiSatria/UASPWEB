<?php

require_once("db.php");

$kode = $_POST["kode"];
$nama = $_POST["nama"];
$query = "INSERT INTO karyawan (kode_karyawan, nama_karyawan) VALUES ('" . $kode . "', '" . $nama . "')";

mysqli_query($conn, $query);

?>