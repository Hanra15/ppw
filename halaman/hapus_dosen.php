<?php
    include 'koneksi.php';
    $id_dosen = $_GET['id_dosen'];
    $queryhapus = "DELETE FROM tbl_dosen_kampus WHERE id_dosen='$id_dosen'";
    $hapus = mysqli_query($conn,$queryhapus);
    header("Location:index.php?p=dosen");
?>
