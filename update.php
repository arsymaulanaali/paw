<?php
include "koneksi.php";
$id = $_POST['id'];
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "UPDATE tbl_mahasiswa set nrp = '$nrp', nama='$nama', email='$email',alamat='$alamat' where id=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi update data mahasiswa gagal";
}else{
    echo "Eksekusi update data mahasiswa berhasil<br>";
    echo "<a href='data_mahasiswa.php'>Show data</a>";
}

?>