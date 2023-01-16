<?php
    $conn = mysqli_connect("localhost", "root", "", "lotus");
    $id = $_GET['id'];
    $hapus = "DELETE FROM transaksi WHERE id_transaksi = '$id'";
    mysqli_query($conn, $hapus);
    echo "<script>alert('data berhasil dihapus');document.location.href='transaksi.php';</script>";
?>