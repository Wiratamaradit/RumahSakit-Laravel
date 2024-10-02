<?php
include 'Koneksi.php';

$noP = $_POST['nopasien'];
$nama = $_POST['namapasien'];
$umur = $_POST['umur'];
$noK = $_POST['nokamar'];

$sql = $dbh->prepare("INSERT INTO pasien(nopasien, namapasien, umur, nokamar) VALUES(:nopasien,:namapasien,:umur,:nokamar)");

$sql->bindParam(':nopasien', $noP);
$sql->bindParam(':namapasien', $nama);
$sql->bindParam(':umur', $umur);
$sql->bindParam(':nokamar', $noK);
$sql->execute();


if ($sql) {
    header("location: Home.php?page=daftar");
} else {
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
}
