<?php
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO tbl_arsy VALUES(null,'$nama','$email','$alamat')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "gagal menambahkan data";
}else{
    echo "Berhasil menambahkan data<br>";
    echo "<a href='data_anggota.php'>Tampilkan data</a>";
}

?>