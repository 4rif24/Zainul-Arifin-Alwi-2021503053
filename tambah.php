 <?php 
require 'functions.php';

if(isset ($_POST["submit"])){



// cek apakah data berhasil ditamvahkan atau tidak

    if (tambah($_POST) > 0 ) {
        echo "<script>
        alert('berhasil di tambahkan!!');
        document.location.href = 'index.php';
        </script>
        ";
    }else {
        echo "<script>alert('gagal di tambahkan!!');
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
    <title>Tambah Alat Perlengkapan</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Tambah Alat Perlengkapan</h1>
        
        
        
        <form action="" method="post" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label for="no_inv" class="form-label">No Inv</label>
                <input type="text" class="form-control" id="no_inv" name="no_inv" required>
            </div>
            <div class="mb-3">
                <label for="nama_alat" class="form-label">Nama Alat</label>
                <input type="text" class="form-control" id="nama_alat" name="nama_alat">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah">
            </div>
            <div class="mb-3">
                <label for="kondisi" class="form-label">Kondisi</label>
                <input type="text" class="form-control" id="kondisi" name="kondisi">
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