<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Modul VI PHP & MySQL </h1>
<P>Nama/NRP:Arsy Maulana Ali/200411100091</P>
<h2>Master Data Mahasiswa</h2>
<a href="form_mahasiswa.php">Tambah data</a>
<table border="1">
    <tr>
        <td>No</td>
        <td>NRP</td>
        <td>NAMA</td>
        <td>Email</td>
        <td>Alamat</td>
        <td>Operasi</td>
    </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $sql="SELECT * FROM tbl_mahasiswa";
        $hasil = mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tr>
            <td><?=$no++; ?></td>
            <td><?=$row['nrp'];?></td>
            <td><?=$row['nama'];?></td>
            <td><?=$row['email'];?></td>
            <td><?=$row['alamat'];?></td>
            <td><a href="form_edit.php?id=<?=$row['id']?>"> Edit</a> | <a href="delete.php?id=<?=$row['id']?>"> Hapus</td>
        </tr>
        <?php }
        ?> 
</table> 
</body>
</html>
