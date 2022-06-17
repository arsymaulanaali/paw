<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM tbl_arsy WHERE id_arsy=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Gagal menghapus data";
}else{
    echo "Berhasil menghapus data<br>";
    echo "<a href='data_anggota.php'> Tampilkan data</a>";
}

?>