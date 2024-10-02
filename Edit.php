<!DOCTYPE html>
<html lang="en">

<?php
include "Koneksi.php";

$noP = $_GET['nopasien'];

$sql = $dbh->prepare("SELECT * FROM pasien WHERE nopasien=:nopasien");
$sql->bindParam(':nopasien', $noP);
$execute = $sql->execute();
$pasien = $sql->fetch();
?>
    <div style="margin-left: 10px; margin-right: 10px">
    <h2>Masukkan Data Baru</h2>
    <form method="POST" action="ProsesUbah.php?nopasien=<?php echo $noP; ?>">
        <table>
            <tr>
                <td>No Pasien</td>
                <td>:</td>
                <td><input type="text" name="nopasien" value="<?php echo $pasien['nopasien']; ?>"></td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td>:</td>
                <td><input type="text" name="namapasien" value="<?php echo $pasien['namapasien']; ?>"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type="text" name="umur" value="<?php echo $pasien['umur']; ?>"></td>
            </tr>
            <tr>
                <td>No. Kamar</td>
                <td>:</td>
                <td>
                    <input list="nokamar" name="nokamar" style="width:100%">
                    <datalist id="nokamar">
                        <option value="100">
                        <option value="200">
                        <option value="300">
                        <option value="400">
                        <option value="500">
                    </datalist>
                </td>
            </tr>
        </table>
        <hr>
        <input type="submit" value="Ubah" style="background-color:aquamarine;">  
    </form>

</body>

</html>