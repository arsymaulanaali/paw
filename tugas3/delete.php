<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM tbl_091 WHERE id_barang=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete data gagal";
}else{
    echo "Data barang berhasil di delete<br>";
    echo "<a href='data_barang.php'> Show data</a>";
}

?>