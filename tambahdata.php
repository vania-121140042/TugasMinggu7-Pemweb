<?php

require 'Lanjutan.php';

if(isset($_POST["submit"])){
  if(tambahdata($_POST)>0){
    echo"
        <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'index.php';
        </script>
    ";
  }else{
    echo"
        <script>
             alert('Data Gagal Ditambahkan');
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
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
   <form action="" method="post">
            <label for="nim" >Masukkan Nim Mahasiswa : </label>
            <input type ="text" name="nim" id="nim" placeholder="ex: budi setiawan..." required>
            <br><br>

            <label for="nama" >Masukkan Nama Mahasiswa : </label>
            <input type ="text" name="nama" id="nama" placeholder="ex: 1211.." required>
            <br><br>

            <label for="kodeprodi" >Masukkan Prodi Mahasiswa : </label>
            <input type ="text" name="kodeprodi" id="kodeprodi" placeholder="ex: IF..." required>
            <br><br>
   
            <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>