<?php
    $conn = mysqli_connect("localhost", "root", "", "lotus");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sistem Pencatatan Transaksi Hotel Lotus</title>
        <link rel="icon" type="image/png" href="lotus4.png">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="fontAwesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="fontAwesome/css/all.min.css">
    </head>
    <body>
        <div class="header">
            <h2 class="logo"><img src="lotus4.png" width="100px" height="70px">Lotus Hotel</h2>
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul class="menu">
                <a href="home.php">Home</a>
                <a href="tamu.php">Data Tamu</a>
                <a href="kamar.php">Data Kamar</a>
                <a href="transaksi.php">Data Transaksi</a>
                <a href="logout.php">Logout</a>
                <label for="chk" class="hide-menu-btn">
                    <i class="fas fa-times"></i>
                </label>
            </ul>
        </div>
        <div class="content">
            <center>
                <p>Data Transaksi</p>
                <table class='content-table' border='1' width='80%'>
                    <tr>
                        <th align='center' width='10%'><b>ID Transaksi</b></th>
                        <th align='center' width='20%'><b>Nama Tamu</b></th>
                        <th align='center' width='10%'><b>No. Kamar</b></th>
                        <th align='center' width='12%'><b>Check In</b></th>
                        <th align='center' width='12%'><b>Check Out</b></th>
                        <th align='center' width='20%'><b>Harga</b></th>
                        <th align='center' width='20%'><b>Keterangan</b></th>
                    </tr>
                    <?php
                        $cari = "SELECT * FROM transaksi ORDER BY id_transaksi";
                        $hasil_cari = mysqli_query($conn, $cari);
                    ?>
                    <?php 
                        while($data = mysqli_fetch_row($hasil_cari)){
                    ?>
                        <tr>
                            <td align='center'><?= $data[0] ?></td>
                            <td align='center'><?= $data[1] ?></td>
                            <td align='center'><?= $data[2] ?></td>
                            <td align='center'><?= $data[3] ?></td>
                            <td align='center'><?= $data[4] ?></td>
                            <td align='center'><?= $data[5] ?></td>
                            <td>
                                <center>
                                    <a href="editing_transaksi.php?id=<?= $data[0];?>"><i class="fas fa-edit"></i></a> |
                                    <a href="hapus_transaksi.php?id=<?= $data[0];?>"><i class="far fa-trash-alt"></i></a>
                                </center>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                </br></br>
                <button><a href="tambah_transaksi.php"><i class="fas fa-plus-square"></i>  Tambah Transaksi</a></button>
            </center>
        </div>
        <footer>
            <p>Copyright &copy; 2021 L200180058| Designed by Arindita Prihastama</p>
        </footer>
    </body>
</html>