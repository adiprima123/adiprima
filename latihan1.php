<?php
// $GET data ini terambil dengan cara GET

$siswa = [
    [
        "nama" => "adiprima raharja",
        "umur" =>"16",
        "hobi" =>"mengedit"
    ]
    ];


    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GET</title>
    </head>
    <body>
       <h1>Daftar siswa</h1> 

       <ul>
       
   <?php foreach ($siswa as $sws): ?>

<ul>
    <li><a href="latihan2.php?Nama=<?= $sws["nama"];?>
    &umur=<?= $sws ["umur"];?>
    &hobi=<?= $sws ["hobi"];?>

    "><?= $sws["nama"]; ?></li>
    </a>
</ul>
<?php endforeach;?>

       </ul>

    </body>
    </html>