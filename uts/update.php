<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "UPDATE tbl_arsy set nama_arsy = '$nama', email_arsy='$email', alamat_arsy='$alamat' where id_arsy=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Gagal mengedit data";
}else{
    echo "Berhasil mengedit data<br>";
    echo "<a href='data_anggota.php'>Show data</a>";
}

?>