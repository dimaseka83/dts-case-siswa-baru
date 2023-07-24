<?php 
    include("koneksi.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM new_siswa WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: list.php');
    } else {
        die("Gagal menghapus...");
    }
?>