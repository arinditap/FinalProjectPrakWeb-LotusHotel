<?php
    $conn = mysqli_connect("localhost", "root", "", "lotus");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data Kamar | Hotel Lotus</title>
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
        <div class='content'>
            <div class='wrapper'>
                <div class='title'>Masukkan Data Kamar</div>
                <form class='form' method='POST' action='tambah_kamar.php'>
                        <div class='input_field'>
                            <label>No. Kamar</label>
                            <input type='text' class='input' name='no_kamar'>
                        </div>
                        <div class='input_field'>
                            <label>Tipe Kamar</label>
                            <input type='text' class='input' name='tipe_kamar'>
                        </div>
                        <div class='input_field'>
                            <label>Harga</label>
                            <input type='text' class='input' name='harga'>
                        </div>
                        <div class='input_field'>
                            <label>Deskripsi</label>
                            <input type='text' class='input' name='deskripsi'>
                        </div>
                        <div class='input_field'>
                            <label>Status</label>
                            <input type='text' class='input' name='stts_kamar'>
                        </div>
                        <div class='input_field'>
                            <input type='submit' class='btn' value='Masukkan' name='submit'>
                        </div>
                    </form>
                    <?php
                        error_reporting(E_ALL ^ E_NOTICE);
                        $no_kamar = $_POST['no_kamar'];
                        $tipe_kamar = $_POST['tipe_kamar'];
                        $harga = $_POST['harga'];
                        $deskripsi = $_POST['deskripsi'];
                        $stts_kamar = $_POST['stts_kamar'];
                        $submit = $_POST['submit'];
                        $input = "INSERT INTO kamar (no_kamar, tipe_kamar, harga, deskripsi, stts_kamar) VALUES ('$no_kamar', '$tipe_kamar', '$harga', '$deskripsi', '$stts_kamar')";
                        if($submit){
                            if($no_kamar==''){
                                echo "<br>Please fill this out!";
                            }elseif($tipe_kamar==''){
                                echo "<br>Please fill this out!";
                            }elseif($harga==''){
                                echo "<br>Please fill this out!";
                            }elseif($deskripsi==''){
                                echo "<br>Please fill this out!";
                            }elseif($stts_kamar==''){
                                echo "<br>Please fill this out!";
                            }else{
                                mysqli_query($conn, $input);
                                echo "<script language script='javascript'>
                                alert('Data berhasil dimasukkan');
                                document.location='kamar.php';
                                </script>";
                            }
                        }
                    ?>
            </div>
        </div>
        <footer>
            <p>Copyright &copy; 2021 L200180058| Designed by Arindita Prihastama</p>
        </footer>
    </body>
</html>