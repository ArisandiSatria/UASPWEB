<?php
require_once("db.php");

$output = '';
if (!isset($_POST["query"])) {
    $query = "SELECT * FROM transaksi";
}
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($data = mysqli_fetch_array($result)) {
        $output .= '
        
        <div class="frame pesanan">
            <h3>Pesanan'. $data["id_transaksi"] .'</h3>
            <a href="#" class="btn detail">Lihat</a>
        </div>

        ';
    }
    echo $output;
} else {
    echo 'Data tidak ditemukan';
}
?>