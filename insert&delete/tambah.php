<?php
// dipanggil function
require 'function.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["tambah"])){
    //cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0){
        echo "
        <script>
        alert('data telah berhasil ditambah!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data telah gagal ditambah!');
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data siswa</title>
</head>
<body>
    <h1>tambah data siswa</h1>
<form action="" method="post">
    <ul>
        <li>
            <label for="nim">nim:</label>
            <input type="text" name="nim" id="nim" require>
        </li>
        <li>
        <label for="nama">nama:</label>
            <input type="text" name="nama" id="nama" require>
        </li>
        <li>
        <label for="email">email:</label>
            <input type="text" name="email" id="email" require>
        </li>
        <li>
        <label for="jurusan">jurusan:</label>
            <input type="text" name="jurusan" id="jurusan" require>
        </li>
        <li>
        <label for="gambar">gambar:</label>
            <input type="text" name="gambar" id="gambar" require>
        </li>
        <li>
            <button type="submit" name="tambah">tambah data</button>
        </li>
    </ul>
</form>
</body>
</html>