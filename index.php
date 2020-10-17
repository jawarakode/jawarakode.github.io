<?php

$mahasiswa = [["Sandhika Galih", "2314124", "Teknik Informatika",
              "email@domain.com"],
              ["Derry Derajat", "12314", "Informatika",
              "maile@domain.com"],
              ["Bintang ", "412412314", "Bandana",
              "Bintang@domain.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) :?>
            <?php foreach($mhs as $m) :?>
                <li> <?= "$m";?> </li>
            <?php endforeach;?>
            <br>
        <?php endforeach;?>

    </ul>

</body>
</html>
