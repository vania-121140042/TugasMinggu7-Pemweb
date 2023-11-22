<?php

require 'Lanjutan.php';

$nim= $_GET["nim"];
$mhs = query("SELECT * FROM mahasiswa WHERE nim = $nim")[0];


if(isset($_POST["submit"])){
  if(ubahdata($_POST)>0){
    echo"
        <script>
            alert('Data Berhasil Diubah');
            document.location.href = 'index.php';
        </script>
    ";
  }else{
    echo"
        <script>
             alert('Data Gagal Diubah');
            document.location.href = 'index.php';
    </script>
    ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
   <form action="" method="post">
    <input type="hidden" name="nim" value="<?= $mhs["nim"]; ?>">
            <label for="nim" >Masukkan Nim Mahasiswa : </label>
            <input type ="text" name="nim" id="nim" placeholder="ex: budi setiawan..." 
            required value="<?= $mhs["nim"]; ?>">
            <br><br>

            <label for="nama" >Masukkan Nama Mahasiswa : </label>
            <input type ="text" name="nama" id="nama" placeholder="ex: 1211.." 
            required value="<?= $mhs["nama"]; ?>">
            <br><br>

            <label for="kodeprodi" >Masukkan Prodi Mahasiswa : </label>
            <input type ="text" name="kodeprodi" id="kodeprodi" placeholder="ex: IF..." 
            required value="<?= $mhs["kodeprodi"]; ?>">
            <br><br>
   
            <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>