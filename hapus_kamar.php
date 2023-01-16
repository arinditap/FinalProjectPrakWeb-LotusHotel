<?php
    $conn = mysqli_connect("localhost", "root", "", "lotus");
    $id = $_GET['id'];
    $hapus = "DELETE FROM kamar WHERE no_kamar = '$id'";
    mysqli_query($conn, $hapus);
    echo "<script>alert('data berhasil dihapus');document.location.href='kamar.php';</script>";
?>