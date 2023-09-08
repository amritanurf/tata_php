<?php
//  $mahasiswa = [
//     ["Amrita Nur Fatihah", "123456789", " 
// amritafatihah374@gmail.com", "Sastra Jepang"],
// ["Ailsa Nabila Febriyanti", "123456789", " 
// ailsa@gmail.com", "Manajemen Aset Publik"],
// ["Cindi Novitasari", "123456789", " 
// cindy@gmail.com", "Dokter Gigi"]
// ];

// Array associative
// definisinya sama seperti array numerik, kecuali
// key nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Amrita Nur Fatihah",
        "nrp" => "123456789",
        "email" => "amritafatihah374@gmail.com",
        "jurusan" => "Sastra Jepang",
        "gambar" => "img/dty.jpg"
    ],
    [
        "nama" => "Ailsa Nabila Febriyanti",
        "nrp" => "123456789",
        "email" => "ailsa@gmail.com",
        "jurusan" => "Manajemen Aset Publik",
        "gambar" => "img/dty.jpg"
    ],
    [
        "nama" => "Cindi Novitasari",
        "nrp" => "123456789",
        "email" => "cindi@gmail.com",
        "jurusan" => "Dokter Gigi",
        "gambar" => "img/dty.jpg"
    ]
    ];
    // echo $mahasiswa[1]["email];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta charset http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $mhs) : ?>
<ul>
<li>
<img src="img/dty.jpg">
</li> 
<li> Nama: <?= $mhs["nama"]; ?></li>
<li> Nrp: <?= $mhs["nrp"]; ?></li>
<li> Jurusan: <?= $mhs["jurusan"]; ?></li>
<li> Email : <?= $mhs["email"]; ?></li>

</ul>
<?php endforeach; ?>
