<?php
require_once('db.php');

$output = '';
$order = $_POST["order"];
if($order == 'asc')  
{  
    $order = 'desc';  
}  
else  
{  
    $order = 'asc';  
}  

$query = "SELECT * FROM karyawan ORDER BY " . $_POST["column_name"] . " " . $_POST["order"] . "";  
$result = mysqli_query($conn, $query);  
$output .= '  
    <table class="table">
        <thead class="thead">
            <tr>
                <th><a class="column_sort" id="kode_karyawan" data-order="'. $order .'" href="#">Kode</a></th>
                <th><a class="column_sort" id="nama_karyawan" data-order="'. $order .'" href="#">Nama</a></th>
                <th>Aksi</th>
            </tr>
        </thead>
';

while($row = mysqli_fetch_array($result))  
{  
    $output .= '  
    <tbody class="tbody">
        <tr>
            <td>' . $row["kode_karyawan"] . '</td>
            <td>' . $row["nama_karyawan"] . '</td>
            <td><i class="far fa-edit"></i> <i class="far fa-trash-alt"></i></td>
        </tr>
    </tbody>
    ';  
}

$output .= '</table>';  
echo $output;  
?> 