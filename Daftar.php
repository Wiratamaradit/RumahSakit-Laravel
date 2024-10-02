<!DOCTYPE html>


<div style="margin-left: 10px; margin-right: 10px">
   <div class="row">
      <div class="col-12">
         <h2 style="text-align:center">Daftar Pasien Rumah Sakit</h2>
      </div>

      <div class="col-4">
         <a href='Home.php?page=tambah'><button style="background-color:aquamarine">Tambah Daftar</button></a>
      </div>

      <div class="col-12">
         <table style="width: 100%; margin-top: 15px;">
            <tr>
               <th>No. Pasien</th>
               <th>Nama Pasien</th>
               <th>Umur Pasien</th>
               <th>No. Kamar</th>
               <th>Nama Kamar</th>
               <th>Kode Kelas</th>
               <th>Kelas</th>
               <th colspan="2">Action</th>

            </tr>
            <?php
            include "Koneksi.php";
            $query = 'SELECT pasien.nopasien, pasien.namapasien, pasien.umur, kamar.nokamar, kamar.namakamar, jeniskamar.kodekelas, jeniskamar.kelas FROM kamar JOIN pasien ON kamar.nokamar=pasien.nokamar JOIN jeniskamar ON kamar.id_jenisk=jeniskamar.id_jenisk ORDER BY pasien.nopasien';
            $stmt = $dbh->query($query);
            $hasil = $stmt->fetchAll();

            foreach ($hasil as $pasien) {
            ?>
               <tr>
                  <td><?php echo $pasien['nopasien'] ?></td>
                  <td><?php echo $pasien['namapasien'] ?></td>
                  <td><?php echo $pasien['umur'] ?></td>
                  <td><?php echo $pasien['nokamar'] ?></td>
                  <td><?php echo $pasien['namakamar'] ?></td>
                  <td><?php echo $pasien['kodekelas'] ?></td>
                  <td><?php echo $pasien['kelas'] ?></td>
                  <?php echo "<td><a href='Edit.php?nopasien=" . $pasien['nopasien'] . "'>" ?><button style="background-color:aqua">Ubah</button></a>
                  <?php echo "<td><a href='ProsesHapus.php?nopasien=" . $pasien['nopasien'] . "'>" ?><button style="background-color:red">Hapus</button></a>
                  </td>
               </tr>
            <?php
            }
            ?>
         </table>
      </div>
   </div>
</div>

</html>