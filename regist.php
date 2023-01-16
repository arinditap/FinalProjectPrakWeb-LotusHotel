<?php 
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "uas");
    
    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql_get = "SELECT * FROM user WHERE username = '$username'";
        $sql = mysqli_query($conn, $sql_get);
        $num_row = mysqli_num_rows($sql);
        
		if ($num_row == 1) {
			echo "<script>alert('Pendaftaran Gagal, Email Sudah Digunakan');</script>";
			echo "<script>location='registrasi.php';</script>";
		}else{
			$password = password_hash($password, PASSWORD_DEFAULT);
			// Query Memasukkan Kedalam Database
            $input = "INSERT INTO user(username, password) VALUES ('$username','$password')";
            $query = mysqli_query($conn, $input);

			echo "<script>alert('Pendaftaran Berhasil, Silahkan Login');</script>";
			echo "<script>location='login.php';</script>";
		}
	}
?>
<html>
    <body>
        <h3>Register</h3>
        <form action='regist.php' method='post'>
            <label>Username</label>
            <input type='text' name='username'><br>
            <label>Password</label>
            <input type='password' name='password'><br>
            <input type='submit' name='register'>
        </form>
    </body>
</html>