<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
    $conn = mysqli_connect('localhost', 'root', '', 'lotus');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $submit = $_POST['submit'];

    if ($submit){
        $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
        if ($row['username'] != ""){
            //berhasil login
            $_SESSION['username'] = $row['username'];
            $_SESSION['status'] = $row['status'];
            if ($row['status']=='Admin Transaksi') {
                $_SESSION['status']='Admin Transaksi';
                ?>
                <script language script="JavaScript">
                document.location='home.php';
                </script>
                <?php
            }else {
                ?>
                <script language script="JavaScript">
                document.location='home_tamu.php';
                </script>
                <?php
            }
        }else{
            //gagal login
            ?>
            <script languange script = "Javascript">
                alert ("Gagal Login");
                document.location = 'index.php';
            </script>
            <?php
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login | Lotus Hotel</title>
        <link rel="icon" type="image/png" href="lotus4.png">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form class="box" method="post" action="index.php">
            <img src='lotus4.png' width='70px' height='50px'>
            <h1>Login</h1>
            <!-- <a href='pm.php'><button>PROFILE MATCHING</button></a>
            <a href='saw.php'><button>SAW</button></a> -->
            <input type='text' name='username' placeholder='Username'>
            <input type='password' name='password' placeholder='Password'>
            <input type='submit' name='submit' value='Login'>
        </form>
    </body>
</html>