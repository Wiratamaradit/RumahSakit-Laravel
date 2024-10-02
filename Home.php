<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PERTEMUAN 12</title>
    <link rel="stylesheet" href="style.css">

</head>
<style>

</style>

<body class="main-body">
    <div class="wrap-home">
        <div class="header-home">
            <h1 class="kiri">Website Administrasi Rumah Sakit</h1>
            <div class="profile">
                <img src="1668610645864.jpg" width="70px" height="85px" style="float:right;" />
                <h4 style="text-align:right;">211226001@mhs.stiki.ac.id &nbsp;</h4>
                <h4 style="text-align:right;">Raditya Adi Wiratama &nbsp;</h4>
            </div>
        </div>
        <div>
            <div class="sidebar-home">
                <h2> Menu </h2>
                <ul>
                    <li><a href="Home.php?page=dashboard">Dashboard</a></li><br>
                    <li><a href="Home.php?page=daftar">Daftar Pasien</a></li><br>
                    <li><a href="Logout.php">Logout</a></li><br>
                </ul>
            </div>
            <!-- <div class="main"> -->
                <div class="content-home" >
                    <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];

                        switch ($page) {
                            case 'dashboard';
                                include "Dashboard.php";
                                break;
                            case 'daftar':
                                include "Daftar.php";
                                break;
                            case 'tambah':
                                include "Tambah.php";
                                break;
                            default:
                                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                                break;
                        }
                    } else {
                        include "Dashboard.php";
                    }

                    ?>
                </div>
                <?php include "Footer.php"; ?>
            <!-- </div> -->
        </div>

</body>

</html>