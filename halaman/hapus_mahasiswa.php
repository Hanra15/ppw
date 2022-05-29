<?php
    include 'koneksi.php';
    $id_mahasiswa = $_GET['id_mahasiswa'];
    $queryhapus = "DELETE FROM tbl_mahasiswa WHERE id_mahasiswa='$id_mahasiswa'";
    $hapus = mysqli_query($conn,$queryhapus);
    header("Location:index.php?p=mahasiswa");
?>
