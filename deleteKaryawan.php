<?php

require_once("db.php");

if (isset($_POST["id_karyawan"])) {
    $id = $_POST["id_karyawan"];
    $query = "DELETE FROM karyawan WHERE id_karyawan = $id";

    mysqli_query($conn, $query);
}
