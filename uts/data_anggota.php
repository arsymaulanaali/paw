<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<h1>Data Anggota </h1>
<a href="form_anggota.php"><i class="material-icons">&#xE147;</i>Tambah data</a>
<table class="table">
    <tr class="table-primary">
        <td>ID </td>
        <td>Nama </td>
        <td>Email </td>
        <td>Alamat </td>
        <td>Action</td>
    </tr>
        <?php
        include 'koneksi.php';
        $sql="SELECT * FROM tbl_arsy";
        $hasil = mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tr class="table-secondary">
            <td><?=$row['id_arsy'];?></td>
            <td><?=$row['nama_arsy'];?></td>
            <td><?=$row['email_arsy'];?></td>
            <td><?=$row['alamat_arsy'];?></td>
            <td><a href="form_edit.php?id=<?=$row['id_arsy']?>"> <i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a> | <a href="delete.php?id=<?=$row['id_arsy']?>"><i class='material-icons'data-toggle='tooltip'title='Delete'>&#xE872;</i></td>
        </tr>
        <?php }
        ?> 
</table> 
</body>
</html>
