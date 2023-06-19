<?php 
require 'functions.php';

// mengambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id

$alt = query("SELECT * FROM tbbarang WHERE id_alat = $id")[0];




// cek apakah tombol data berhasil ditekan atau belum 
if(isset ($_POST["submit"])){


// cek apakah data berhasil diubah atau tidak

    if (ubah($_POST) > 0 ) {
        echo "<script>
        alert('berhasil di ubah!!');
        document.location.href = 'index.php';
        </script>
        ";
    }else {
        echo "<script>alert('gagal di ubah!!');
        document.location.href = 'index.php';</script>
        ";
        

    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Alat</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
    
    <div class="container">
               
        <h1>Ubah Data Alat</h1>
        
        
        <form action="" method="post" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label for="no_inv" class="form-label">No Inv</label>
                <input type="text" class="form-control" id="no_inv" aria-describedby="no_inv" required value= "<?= $alt["no_inv"]; ?>">
            </div>
            <div class="mb-3">
                <label for="nama_alat" class="form-label">Nama Alat</label>
                <input type="text" class="form-control" id="nama_alat" aria-describedby="nama_alat" required value= "<?= $alt["nama_alat"]; ?>">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="text" class="form-control" id="jumlah" aria-describedby="jumlah" required value= "<?= $alt["jumlah"]; ?>">
            </div>
            <div class="mb-3">
                <label for="kondisi" class="form-label">Kondisi</label>
                <input type="text" class="form-control" id="kondisi" aria-describedby="kondisi" required value= "<?= $alt["kondisi"]; ?>">
            </div>
            <div class="mb-3">
                <label for="gambar">gambar</label>
                <input type="file" name="gambar" id="gambar">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Tambah Alat!</button>

            </form>
            </div>
            <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>