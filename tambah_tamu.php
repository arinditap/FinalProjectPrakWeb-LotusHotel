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
        <div class='content'>
            <div class='wrapper'>
                <div class='title'>Masukkan Data Tamu</div>
                <form class='form' method='POST' action='tambah_tamu.php'>
                        <div class='input_field'>
                            <label>ID</label>
                            <input type='text' class='input' name='id_tamu'></td>
                        </div>
                        <div class='input_field'>
                            <label>Nama</label>
                            <input type='text' class='input' name='nama_tamu''></td>
                        </div>
                        <div class='input_field'>
                            <label>Alamat</label>
                            <input type='text' class='input' name='alamat'></>
                        </div>
                        <div class='input_field'>
                            <input type='submit' class='btn' value='Masukan' name='submit'>
                        </div>
                    </form>
                    <?php
                        error_reporting(E_ALL ^ E_NOTICE);
                        $id_tamu = $_POST['id_tamu'];
                        $nama_tamu = $_POST['nama_tamu'];
                        $alamat = $_POST['alamat'];
                        $submit = $_POST['submit'];
                        $input = "INSERT INTO tamu (id_tamu, nama_tamu, alamat) VALUES ('$id_tamu', '$nama_tamu', '$alamat')";
                        if($submit){
                            if($id_tamu==''){
                                echo "<br>Please fill this out!";
                            }elseif($nama_tamu==''){
                                echo "<br>Please fill this out!";
                            }elseif($alamat==''){
                                echo "<br>Please fill this out!";
                            }else{
                                mysqli_query($conn, $input);
                                echo "<script language script='javascript'>
                                    alert('Data berhasil dimasukkan');
                                    document.location='tamu.php';
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