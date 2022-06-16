<?php
require_once("db.php");

$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($conn, $_POST["query"]);
    $query = "SELECT * FROM produk WHERE nama_produk LIKE '%" . $search . "%' ";
} else {
    $query = "SELECT * FROM produk";
}
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($data = mysqli_fetch_array($result)) {
        $output .= '
        
            <div class="frame produk">
                <img src="img/menu-1.png" alt="">
                <h3>'. $data["nama_produk"] .'</h3>
                <div class="price">Rp '. $data["harga_produk"] .'</div>
                <a href="#" class="btn detail">Detail</a>
            </div>

        ';
    }
    echo $output;
} else {
    echo 'Data tidak ditemukan';
}
?>