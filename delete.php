<?php
    // Koneksi ke Database
    include "koneksi.php";

    // Mendapatkan id mahasiswa yang akan dihapus
    $id = $_GET['id'];

    //Query hapus data mahasiswa
    $sql = "DELETE FROM mahasiswa WHERE id = '$id'";    

    if (mysqli_query($link, $sql)) {
        header("location : tampil_data.php");
    }
?>