<!DOCTYPE html>
<html>
    <head>
        <title>Data Tamu | Hotel Lotus</title>
        <link rel="icon" type="image/png" href="lotus4.png">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="fontAwesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="fontAwesome/css/all.min.css">
        <?php
            $conn = mysqli_connect("localhost", "root", "", "lotus");
            $id = $_GET['id'];
            $cari = "SELECT * FROM tamu WHERE id_tamu = '$id'";
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
                <div class='title'>Edit Data Tamu</div>
                <form class='form' method='POST' action='editing_tamu.php'>
                    <?php while($data = mysqli_fetch_row($hasil)){    ?>
                        <div class='input_field'>
                            <label>ID</label>
                            <input type='text' class='input' name='id_tamu' required value="<?= $data[0]?>"></td>
                        </div>
                        <div class='input_field'>
                            <label>Nama</label>
                            <input type='text' class='input' name='nama_tamu' required value="<?= $data[1]?>"></td>
                        </div>
                        <div class='input_field'>
                            <label>Alamat</label>
                            <input type='text' class='input' name='alamat' required value="<?= $data[2]?>"></>
                        </div>
                    <?php } ?>
                        <div class='input_field'>
                            <input type='submit' class='btn' value='Edit' name='edit'>
                        </div>
                </form>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "lotus");
                    error_reporting(E_ALL ^ E_NOTICE);
                    $id_tamu = $_POST['id_tamu'];
                    $nama_tamu = $_POST['nama_tamu'];
                    $alamat = $_POST['alamat'];
                    $edit = $_POST['edit'];
                    $update = "UPDATE tamu SET id_tamu = '$id_tamu', nama_tamu = '$nama_tamu', alamat = '$alamat' WHERE id_tamu = '$id_tamu'";
                    if($edit){
                        if($id_tamu==''){
                            echo "<br>Please fill this out!";
                        }elseif($nama_tamu==''){
                            echo "<br>Please fill this out!";
                        }elseif($alamat==''){
                            echo "<br>Please fill this out!";
                        }else{
                            mysqli_query($conn, $update);
                            echo "<script language script='javascript'>
                                    alert('Data berhasil dimasukkan');
                                    document.location.href='tamu.php';
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