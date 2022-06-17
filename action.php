<?php
include "koneksi.php";

$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO tbl_mahasiswa VALUES(null,'$nrp','$nama','$email','$alamat')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi tambah data mahasiswa gagal";
}else{
    echo "Eksekusi tambah data mahasiswa berhasil<br>";
    echo "<a href='data_mahasiswa.php'>Show data</a>";
}

?>