<?php 

require 'functions.php';
$barang = query("SELECT * FROM tbbarang");


// tombol cari ditekan
if (isset($_POST["cari"])) {
    $barang = cari($_POST["keyword"]);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Peminjaman Alat Perlengkapan</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>



<div class="container">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Pinjaman Alat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link " href="index.php" id="navbarDarkDropdownMenuLink" role="button"  aria-expanded="false">
            Pinjam
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link " href="index.php" id="navbarDarkDropdownMenuLink" role="button"  aria-expanded="false">
            Menyerahkan
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link " href="index.php" id="navbarDarkDropdownMenuLink" role="button"  aria-expanded="false">
            Laporan
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br>  
  <h1>Daftar Alat Perlengkapan</h1>
  
  <br>
  
  
  <form action=" " method="post">
    <input class="col-form-label" type="text" name="keyword" size="30" autofocus placeholder="masukkan alat yang anda cari" autocomplete="off">
    <button type="submit" name = "cari" type="submit" class="btn btn-primary">Cari!</button>
  </form>
  <br>
    <a href="tambah.php" type="button" class="btn btn-primary">Tambah Alat Perlengkapan</a>
    <br><br>
    <table class="table table-striped" border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>NO.</td>
            <td>Aksi</td>
            <td>Gambar</td>
            <td>NO Inv</td>
            <td>Nama</td>
            <td>Jumlah</td>
            <td>Kondisi</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($barang as $row) :?>
            
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id_alat"]; ?>" type="button" class="btn btn-success">ubah</a>
                    <a href="hapus.php?id=<?= $row["id_alat"]; ?>" onclick="return confirm('yakin?');" type="button" class="btn btn-danger" >hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>"width = "50"></td>
                <td ><?= $row["no_inv"]; ?></td>
                <td><?= $row["nama_alat"]; ?></td>
                <td><?= $row["jumlah"]; ?></td>
                <td><?= $row["kondisi"]; ?></td>
                
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
        
        
        
    </div>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>