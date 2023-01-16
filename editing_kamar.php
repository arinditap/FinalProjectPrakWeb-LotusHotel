<!DOCTYPE html>
<html>
    <head>
        <title>Sistem Pencatatan Transaksi Hotel Lotus</title>
        <link rel="icon" type="image/png" href="lotus4.png">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="fontAwesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="fontAwesome/css/all.min.css">
        <?php
            $conn = mysqli_connect("localhost", "root", "", "lotus");
            $id = $_GET['id'];
            $cari = "SELECT * FROM kamar WHERE no_kamar = '$id'";
            $hasil = mysqli_query($conn, $cari);
        ?>
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
                <div class='title'>Edit Data Kamar</div>
                <form class='form' method='POST' action='editing_kamar.php'>
                    <?php while($data = mysqli_fetch_row($hasil)){    ?>
                        <div class='input_field'>
                            <label>No. Kamar</label>
                            <input type='text' class='input' name='no_kamar' required value="<?= $data[0]?>">
                        </div>
                        <div class='input_field'>
                            <label>Tipe Kamar</label>
                            <input type='text' class='input' name='tipe_kamar' required value="<?= $data[1]?>">
                        </div>
                        <div class='input_field'>
                            <label>Harga</label>
                            <input type='text' class='input' name='harga'required value="<?= $data[2]?>">
                        </div>
                        <div class='input_field'>
                            <label>Deskripsi</label>
                            <input type='text' class='input' name='deskripsi'required value="<?= $data[3]?>">
                        </div>
                        <div class='input_field'>
                            <label>Status</label>
                            <input type='text' class='input' name='stts_kamar' required value="<?= $data[4]?>">
                        </div>
                    <?php } ?>
                        <div class='input_field'>
                            <input type='submit' class='btn' value='Edit' name='edit'>
                        </div>
                </form>
                <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'lotus');
                    error_reporting(E_ALL ^ E_NOTICE);
                    $no_kamar = $_POST['no_kamar'];
                    $tipe_kamar = $_POST['tipe_kamar'];
                    $harga = $_POST['harga'];
                    $deskripsi = $_POST['deskripsi'];
                    $stts_kamar = $_POST['stts_kamar'];
                    $edit = $_POST['edit'];
                    $update = "UPDATE kamar SET no_kamar = '$no_kamar', tipe_kamar = '$tipe_kamar', harga = '$harga', deskripsi = '$deskripsi', stts_kamar = '$stts_kamar' WHERE no_kamar = '$no_kamar'";
                    if($edit){
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
                            mysqli_query($conn, $update);
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