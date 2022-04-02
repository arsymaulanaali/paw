<?php
require 'fungction.php';
$data = query("SELECT * FROM tbl_091");

?>
<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <table border="1">
        <h1>Data barang</h1>

        <tr>
            <th>No</th>
            <th>Kode_Barang</th>
            <th>Nama_Barang</th>
            <th>Harga_Barang</th>
        </tr>
        
        <?php foreach($data as $hasil) : ?>
        <tr>
            <td><?= $hasil["no"]; ?></td>
            <td><?= $hasil["kode_barang"]; ?></td>
            <td><?= $hasil["nama_barang"]; ?></td>
            <td><?= $hasil["harga_barang"]; ?></td>
        </tr>
        
        <?php endforeach; ?>
        
    </table>
</body>
</html>