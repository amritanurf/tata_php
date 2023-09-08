<?php 
require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
// cek apakah data berhasil ditambahkan atau tidak
if( tambah($_POST) > 0 ){
    echo "
    <script>
    alert('data berhasil ditambahkan!');
    document.location.href = 'index.php';
    </script>
    ";
    
}else{

}
    echo "
    <script>
    alert('data gagal ditambahkan!');
    document.location.href = 'index.php';
    </script>
    ";
}



?>

<!DOCTYPE html>
<html>
<head>
<title>tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" nama="nrp" id="nrp"
                required>
            </li>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" nama="nama" id="nama">
            </li>
            <li>
                <label for="email">EMAIL :</label>
                <input type="text" nama="email" id="email">
            </li>
            <li>
                <label for="jurusan">JURUSAN :</label>
                <input type="text" nama="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">GAMBAR :</label>
                <input type="text" nama="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>