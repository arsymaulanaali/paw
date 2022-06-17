<?php
include "koneksi.php";

$nama = $_POST['nama_barang'];
$kode = $_POST['kode_barang'];
$harga = $_POST['harga_barang'];

$sql = "INSERT INTO tbl_091 VALUES(null,'$nama','$kode','$harga')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi tambah data barang gagal";
}else{
    echo "Eksekusi tambah data barang berhasil<br>";
    echo "<a href='data_barang.php'>Show data</a>";
}

?>