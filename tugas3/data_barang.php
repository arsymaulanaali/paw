<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h1>Data Barang </h1>
<a href="form_barang.php">Tambah data</a>
<table class="table">
    <tr class="table-primary">
        <td>ID Barang</td>
        <td>Nama Barang</td>
        <td>Kode Barang</td>
        <td>Harga Barang</td>
        <td>Action</td>
    </tr>
        <?php
        include 'koneksi.php';
        $sql="SELECT * FROM tbl_091";
        $hasil = mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tr class="table-secondary">
            <td><?=$row['id_barang'];?></td>
            <td><?=$row['nama_barang'];?></td>
            <td><?=$row['kode_barang'];?></td>
            <td><?=$row['harga_barang'];?></td>
            <td><a href="form_edit.php?id=<?=$row['id_barang']?>"> Edit</a> | <a href="delete.php?id=<?=$row['id_barang']?>"> Delete</td>
        </tr>
        <?php }
        ?> 
</table> 
</body>
</html>
