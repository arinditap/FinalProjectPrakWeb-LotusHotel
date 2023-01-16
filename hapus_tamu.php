<?php
    $conn = mysqli_connect("localhost", "root", "", "lotus");
    $id = $_GET['id'];
    $hapus = "DELETE FROM tamu WHERE id_tamu = '$id'";
    mysqli_query($conn, $hapus);
    echo "<script>alert('data berhasil dihapus');document.location.href='tamu.php';</script>";
?>