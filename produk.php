<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopi Bersama</title>

    <!-- Font Awesome CDN Link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS File -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<!-- Header Start -->

<header class="header">

    <nav class="navbar">
        <a href="index.php">Transaksi</a>
        <a href="produk.php">Produk</a>
        <a href="karyawan.php">Karyawan</a>
    </nav>

    <div class="icon fas fa-search" id="search-btn" style="color: white;"></div>

        <div class="search" id="search">
            <input type="search" id="search-box" placeholder="Cari...">
        </div>

</header>

<!-- Header End -->

<!-- Content Start -->

<section class="content">

    <a class="btn add" href="#modal">Tambah Produk</a>

    <div class="modal modal-produk" id="modal">
        <div class="form">
            <h3>Tambah Produk</h3>
            <div class="form-add-data">
                <div class="nama">
                    <label for="nama">Nama Produk:</label>
                    <input type="text" class="input-modal-produk" id="nama">
                </div>
                <div class="harga">
                    <label for="hargaProduk">Harga Produk:</label>
                    <input type="number" class="input-modal-produk" id="harga">
                </div>
                <div class="stok">
                    <label for="namaKaryawan">Stok Produk:</label>
                    <input type="number" class="input-modal-produk" id="stok">
                </div>
                <div class="keterangan">
                    <label for="namaKaryawan">Keterangan Produk:</label>
                    <textarea name="keterangan" class="input-modal-produk" id="keterangan" rows="1"></textarea>
                </div>
            </div>
            <div class="btn-add-data">
                <a href="#" class="btn btn-cancel-add">Batal</a>
                <a href="#" class="btn" id="save-produk">Tambah</a>
            </div>
        </div>
    </div>

    <div class="box" id="content">
        
    </div>

</section>

<!-- Content End -->

<!-- Footer Start  -->

<footer>

    <div class="credit">&copy; copyright 2022 <span>Kelompok 13.</span> - All Rights Reserved</div>

</footer>

<!-- Footer End -->

<!-- Jquery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Custom JS File -->
<script src="script.js"></script>

</body>
</html>