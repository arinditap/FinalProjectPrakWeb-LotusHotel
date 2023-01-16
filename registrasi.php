<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "uas");
    $uname = $_POST['username'];
    $cek_uname = "SELECT * FROM user WHERE username = '$uname'";
    $sql = mysqli_query($conn, $cek_uname);

    if(isset($_POST['register'])){
        if(mysqli_num_rows($cek_uname) > 0 && empty($_POST['password'])){
            echo "<script> 
                alert ('username sudah digunakan');
                document.location = 'register.php';
                </script>";
        }else{
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $password = md5($password);
            $query = "INSERT INTO user (username, password) VALUES ('$username', $password')";
            if (mysqli_query($conn, $query)){
                echo "<script>
                    alert ('Registrasi berhasil');
                    document.location = 'login.php';
                    </script>";
            }
        }
    }
?>
<html>
    <body>
        <h3>Register</h3>
        <form action='registrasi.php' method='post'>
            <label>Username</label>
            <input type='text' name='username'><br>
            <label>Password</label>
            <input type='password' name='password'><br>
            <input type='submit' name='submit'>
        </form>
    </body>
</html>