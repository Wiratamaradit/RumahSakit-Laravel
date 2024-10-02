<?php

include "Koneksi.php";

$noP = $_GET['nopasien'];

$sql = $dbh->prepare("DELETE FROM pasien WHERE nopasien=:nopasien");
$sql->bindParam(':nopasien', $noP);
$execute = $sql->execute();
if ($execute) {
    header("location: Home.php?page=daftar");
} else {
    echo "Data gagal dihapus. <a href='Home.php'>Kembali</a>";
}
