<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Edit Anggota</title>
</head>
<body>
<?php
 include 'koneksi.php';
 $id=$_GET['id'];
$sql = "SELECT * FROM tbl_arsy where id_arsy=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}

?>

<h1>Form Edit Anggota</h1>
<?php
while ($row = mysqli_fetch_array($hasil))
{
?>

    <form method="post" action="update.php">
    <input type="hidden" name="id" value="<?php echo $row['id_arsy']?>">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $row['nama_arsy']?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email"  value="<?php echo $row['email_arsy']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat_arsy']?>">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
</form>
<?php }?>
</body>
</html>