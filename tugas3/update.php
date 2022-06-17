<?php
include "koneksi.php";
$id = $_POST['id_barang'];
$nama = $_POST['nama_barang'];
$kode = $_POST['kode_barang'];
$harga = $_POST['harga_barang'];

$sql = "UPDATE tbl_091 set nama_barang = '$nama', kode_barang='$kode', harga_barang='$harga' where id_barang=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi update data barang gagal";
}else{
    echo "Eksekusi update data barang berhasil<br>";
    echo "<a href='data_barang.php'>Show data</a>";
}

?>