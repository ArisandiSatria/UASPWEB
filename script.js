$(document).ready(function() {
    // Search Button
    $("#search-btn").click(function () {
        $("#search").toggleClass("active");
    });
    $(window).scroll(function() {
        $("#search").removeClass("active");
    })

    // Search
    $('#search-box').keyup(function () {
        let search = $(this).val();
        if (search != '') {
            load(search);
        }
        else {
            load();
        }
    });

    // Show Produk
    load();
    function load(query) {
        $.ajax({
            url: "show.php",
            method: "POST",
            data: { query: query },
            success: function (data) {
                $('#content').html(data);
            }
        });
    }

    // Show Transaksi
    loadTransaksi();
    function loadTransaksi(query) {
        $.ajax({
            url: "transaksiShow.php",
            method: "POST",
            data: { query: query },
            success: function (data) {
                $('#transaksi').html(data);
            }
        });
    }

    // Sort Table Karyawan
    $(document).on('click', '.column_sort', function(){ 
        let column_name = $(this).attr("id");  
        let order = $(this).data("order");  
        $.ajax({  
            url:"sort.php",  
            method:"POST",  
            data:{column_name:column_name, order:order},  
            success:function(data)  
            {  
                $('#karyawan').html(data);  
            }  
        })  
    });

    // Add Karyawan
    $("#save-karyawan").click(function () {
        $kode = $("#kode").val()
        $nama = $("#nama").val()
        $.ajax({
            url: "insertKaryawan.php",
            method: "POST",
            data: {
                kode: $kode,
                nama: $nama,
            },
            success: function (data) {
                $('#karyawan').html(data);
                window.location.reload();
                $kode = $("#kode").val('');
                $nama = $("#nama").val('');
            }
        })
    })

    // Add Produk
    $("#save-produk").click(function () {
        $nama = $("#nama").val()
        $harga = $("#harga").val()
        $stok = $("#stok").val()
        $keterangan = $("#keterangan").val()
        $.ajax({
            url: "insertProduk.php",
            method: "POST",
            data: {
                nama: $nama,
                harga: $harga,
                stok: $stok,
                keterangan: $keterangan,
            },
            success: function (data) {
                $('#content').html(data);
                location.reload();
            }
        })
    })
});

