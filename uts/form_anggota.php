<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Tambah Anggota</title>
</head>
<body>

<h1>Form Tambah Anggota</h1>
    
    <form method="post" action="action.php">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
            <label class="form-label">email</label>
            <input type="text" class="form-control" name="email" >
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">alamat</label>
            <input type="text" class="form-control" name="alamat">
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
</form>
</body>
</html>