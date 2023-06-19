<?php 
$conn = mysqli_connect("localhost", "root","","barang"); 

function query($query){
global  $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data){
    global $conn;
    $noinv = htmlspecialchars($data["no_inv"]);
    $nama = htmlspecialchars($data["nama_alat"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $kondisi = htmlspecialchars($data["kondisi"]);
    
   
    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }




    $query = "INSERT INTO tbbarang
                    VALUES 
                    (
                        '','$noinv','$nama','$jumlah','$kondisi',
                        '$gambar'
                    )"; 

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



  
function upload(){
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

// cek apakah tidak ada gambar yang di upload

if ($error === 4) {
    echo "<script>
    alert('pilih gambar terlebih dahulu');
    
    </script>";
    return false;
}


// cek apakah yang di upload adalah gambar

$ekstensiGambarValid = ['jpg','jpeg','png'];
$ekstensiGambar = explode('.',$namaFile);
$ekstensiGambar = strtolower(end($ekstensiGambar));
if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
    echo "<script>
    alert('yang anda upload bukan gambar');
    
    </script>"; 
    return false;
    
}


// cek jika ukurannya terlalu besar
if($ukuranFile > 1000000){
    echo "<script>
    alert('ukuran gambar terlalu besar');
    
    </script>";

    return false;
}

// lolos pengecekan, gambar siap diuplod
// generate nama file baru

$namaFileBaru = uniqid();
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensiGambar;

move_uploaded_file($tmpName,'img/'. $namaFileBaru);


return $namaFileBaru;

}


function hapus($id){

    global $conn;

    mysqli_query($conn,"DELETE FROM tbbarang WHERE id_alat = $id");
    return mysqli_affected_rows($conn);
}





function ubah($data){ 
    global $conn;
    $id = $data["id_alat"];
    $noinv = htmlspecialchars($data["no_inv"]);
    $nama = htmlspecialchars($data["nama_alat"]);
    $jumlah = htmlspecialchars($data["jumlah"]);
    $kondisi = htmlspecialchars($data["kondisi"]);

    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    }else {
        $gambar = upload();
    }
    
    
    $query = "UPDATE tbbarang SET
                no_inv = '$noinv',
                nama_alat = '$nama',
                kondisi = '$kondisi',
                jumlah = '$jumlah',
                gambar = '$gambar'

                WHERE id_alat = $id
                    "; 

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}




    function cari($keyword){
        $query = "SELECT * FROM tbbarang 
        WHERE
        nama_alat LIKE '%$keyword%' OR
        no_inv LIKE '%$keyword%' OR
        kondisi LIKE '%$keyword%' OR
        jumlah LIKE '%$keyword%'
        ";

        return  query($query);
    }


    function registrasi($data){
        global $conn;
    
        $username = strtolower(stripslashes($conn, $data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
        
        
         // cek konfirmasi password
    if ($password !== $password2){
    
        echo"<script>
        alert('konfirmasi password tidak sesuai');
        </script>;    
        ";
    
        return false;
    }
    return 1;
    //cek enskripsi password
    // $password = password_hash($password, PASSWORD_DEFAULT );
    
    }
    











?>


 