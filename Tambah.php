<!DOCTYPE html>
<html lang="en">

<div style="margin-left: 10px; margin-right: 10px">
    <h2>Tambahkan Daftar Pasien</h2>
    <form action="ProsesTambah.php" method="POST">
        <table style="width: 100%;">
            <tr>
                <td>No. Pasien</td>
                <td>:</td>
                <td><input type="text" name="nopasien" style="width: 100%;"></td>
            </tr>
            <tr>
                <td>Nama Pasien</td>
                <td>:</td>
                <td><input type="text" name="namapasien" style="width: 100%;"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type="text" name="umur" style="width: 100%;"></td>
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
        <input type="submit" value="Simpan" style="background-color:aquamarine;">
    </form>

</div>

</html>