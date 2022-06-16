<?php

require_once("db.php");

$id = $_POST["id"];
$kode = $_POST["kode"];
$nama = $_POST["nama"];
$query = "UPDATE karyawan 
        SET kode_karyawan =  '$kode' , nama_karyawan =  '$nama' 
        WHERE id_karyawan = $id";

mysqli_query($conn, $query);

?>