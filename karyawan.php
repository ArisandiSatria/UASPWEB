<?php  
require_once('db.php');
$query = "SELECT * FROM karyawan ORDER BY nama_karyawan ASC";  
$result = mysqli_query($conn, $query);  
?>  

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

</header>

<!-- Header End -->

<section class="content">

    <a class="btn add" href="#modal">Tambah Karyawan</a>

    <div class="modal" id="modal">
        <div class="form">
            <h3>Tambah Karyawan</h3>
            <div class="form-add-data">
                <div class="kode">
                    <label for="kode">Kode Karyawan:</label>
                    <input type="number" class="input-modal" id="kode">
                </div>
                <div class="nama">
                    <label for="namaKaryawan">Nama Karyawan:</label>
                    <input type="text" class="input-modal" id="nama">
                </div>
            </div>
            <div class="btn-add-data">
                <a href="#" class="btn btn-cancel-add">Batal</a>
                <a href="#" class="btn" id="save-karyawan">Tambah</a>
            </div>
        </div>
    </div>

    <div class="modal modal-edit-karyawan" id="edit-karyawan" style="display: none;">
        <div class="form">
            <h3>Edit Karyawan</h3>
            <div class="form-add-data">
                <div class="kode">
                    <label for="kode">Kode Karyawan Baru:</label>
                    <input type="number" class="input-modal-karyawan" id="kode-edit">
                </div>
                <div class="nama">
                    <label for="namaKaryawan">Nama Karyawan Baru:</label>
                    <input type="text" class="input-modal-karyawan" id="nama-edit">
                </div>
            </div>
            <div class="btn-add-data">
                <a href="" class="btn btn-cancel-add">Batal</a>
                <a href="#" class="btn" id="btn-edit-karyawan">Edit</a>
            </div>
        </div>
    </div>

    <div class="box" id="karyawan">
    
        <table class="table">
            <thead class="thead">
                <tr>
                    <th><a class="column_sort" id="kode_karyawan" data-order="asc" href="#">Kode</a></th>
                    <th><a class="column_sort" id="nama_karyawan" data-order="asc" href="#">Nama</a></th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="tbody">
                <?php
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
                <tr>
                    <td><?php echo $row["kode_karyawan"]; ?></td>
                    <td><?php echo $row["nama_karyawan"]; ?></td>
                    <td>
                        <a href="#" id="<?=$row["id_karyawan"]?>" onclick="editKaryawan(<?=$row['id_karyawan']?>)"><i class="far fa-edit"></i></a>
                        <a href="#" id="<?=$row["id_karyawan"]?>" onclick="hapusKaryawan(<?=$row['id_karyawan']?>)"><i class="far fa-trash-alt" ></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

</section>

<!-- Content End -->

<!-- Footer Start  -->

<footer>

    <div class="credit">&copy; copyright 2022 <span>Kelompok 13.</span> - All Rights Reserved</div>

</footer>

<!-- Jquery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Custom JS File -->
<script src="script.js"></script>

<script>
    // Edit Karyawan
    function editKaryawan(id) {
        $("#edit-karyawan").toggle();
        $("#btn-edit-karyawan").click(function () {
            $kode = $("#kode-edit").val();
            $nama = $("#nama-edit").val();
            $.ajax({
                url: "editKaryawan.php",
                method: "POST",
                data: {
                    id: id,
                    kode: $kode,
                    nama: $nama,
                },
                success: function (data) {
                    $('#karyawan').html(data);
                    window.location.reload();
                    $kode = $("#kode-edit").val('');
                    $nama = $("#nama-edit").val('');
                }
            })
        })
    }

    // Delete Karyawan
    function hapusKaryawan(id) {
        if (confirm("Apakah anda yakin?")) {
            $.ajax({
                url: "deleteKaryawan.php",
                method: "POST",
                data: {
                    id_karyawan: id
                },
                success: function(data) {
                    console.log("Data berhasil dihapus")
                    $.ajax({
                        success: function (data) {
                            $('#karyawan').html(data);
                            location.reload();
                        }
                    });
                }
            });
        }
    }
</script>  

<!-- Footer End -->
</body>
</html>