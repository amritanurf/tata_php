<?php
//  variabel scope / lingkup variabel
// $x = 10;
// echo $x;

// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];

// $_GET
// $_GET["nama"] = "Amrita Nur Fatihah";
// $_GET["nrp"] = "123456789";
$mahasiswa = [
    [
        "nama" => "Amrita Nur Fatihah",
        "nrp" => "123456789",
        "email" => "amritafatihah374@gmail.com",
        "jurusan" => "Sastra Jepang",
        "gambar" => "dty.jpg"
    ],
    [
        "nama" => "Ailsa Nabila Febriyanti",
        "nrp" => "123456789",
        "email" => "ailsa@gmail.com",
        "jurusan" => "Manajemen Aset Publik",
        "gambar" => "dty.jpg"
    ],
    [
        "nama" => "Cindi Novitasari",
        "nrp" => "123456789",
        "email" => "cindi@gmail.com",
        "jurusan" => "Dokter Gigi",
        "gambar" => "dty.jpg"
    ]
    ];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <!-- <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
        <li><?= $mhs["nama"]; ?></li>
        <li><?= $mhs["nrp"]; ?></li> -->
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>
            &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
</ul>
<?php endforeach; ?>

</body>
</html>