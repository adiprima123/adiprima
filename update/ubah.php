<?php
// dipanggil function
 'function.php';

//diambil dari URL
$id = $_GET ["id"]

//query untuk menentukan berdasarkan ID
$sws = query("SELECT * FROM siswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["update"])){
    //cek apakah data berhasil ditambahkan atau tidak
    if (ubah($_POST) > 0){
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
    <title>update data siswa</title>
</head>
<body>
    <h1> update data siswa </h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $sws["id"]; ?>">
    <ul>
        <li>
            <label for="nim">nim:</label>
            <input type="text" name="nim" id="nim" value="<?= $sws["nim"]; ?>">
        </li>
        <li>
        <label for="nama">nama:</label>
            <input type="text" name="nama" id="nama" value="<?= $sws["nama"]; ?>">
        </li>
        <li>
        <label for="email">email:</label>
            <input type="text" name="email" id="email" value="<?= $sws["email"]; ?>">
        </li>
        <li>
        <label for="jurusan">jurusan:</label>
            <input type="text" name="jurusan" id="jurusan" value="<?= $sws["jurusan"]; ?>">
        </li>
        <li>
        <label for="gambar">gambar:</label>
            <input type="text" name="gambar" id="gambar" value="<?= $sws["gambar"]; ?>">
        </li>
        <li>
            <button type="submit" name="update">update data</button>
        </li>
    </ul>
</form>
</body>
</html>