<?php

include "Koneksi.php";

$noP = $_GET['nopasien'];
$nama = $_POST['namapasien'];
$umur = $_POST['umur'];
$noK = $_POST['nokamar'];

$sql = $dbh->prepare("UPDATE pasien SET nopasien=:nopasien, namapasien=:namapasien, umur=:umur, nokamar=:nokamar WHERE nopasien=:nopasien");
$sql->bindParam(':nopasien', $noP);
$sql->bindParam(':namapasien', $nama);
$sql->bindParam(':umur', $umur);
$sql->bindParam(':nokamar', $noK);

$execute = $sql->execute();

if($execute){ 
  header("location: Home.php?page=daftar");
}else{
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
}
?>