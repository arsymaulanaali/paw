<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Edit Barang</title>
</head>
<body>
<?php
 include 'koneksi.php';
 $id=$_GET['id'];
$sql = "SELECT * FROM tbl_091 where id_barang=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}

?>

<h1>Form Edit Barang</h1>
<?php
while ($row = mysqli_fetch_array($hasil))
{
?>

    <form method="post" action="update.php">
    <input type="hidden" name="id_barang" value="<?php echo $row['id_barang']?>">
        <div class="mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" value="<?php echo $row['nama_barang']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Kode Barang</label>
            <input type="text" class="form-control" name="kode_barang"  value="<?php echo $row['kode_barang']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
            <input type="text" class="form-control" name="harga_barang" value="<?php echo $row['harga_barang']?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php }?>
</body>
</html>