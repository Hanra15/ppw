<?php 
    include 'koneksi.php';
    if(isset($_POST['add'])){
        $no = $_POST['no'];
        $nik_dosen = $_POST['nik_dosen'];
        $nama_dosen = $_POST['nama_dosen'];
        $email_dosen = $_POST['email_dosen'];
        $query = "INSERT INTO tbl_dosen_kampus VALUES('$no','$nik_dosen','$nama_dosen','$email_dosen')";
        $add = mysqli_query($conn,$query);
        header("location:index.php?p=dosen");
    }
?>
<div class="formstyle">
    <h2>Form Tambah Dosen</h2>
    <form action="index.php?p=tambah_dosen" id="dosen" method="post">
        <label for="nik">NIK</label>
        <input type="hidden" name="id_dosen" id="id_dosen">
        <input type="number" name="nik_dosen" id="nik"><br><br>
        <label for="nama">Nama Dosen</label>
        <input type="text" name="nama_dosen" id="nama"><br><br>
        <label for="email">Email Dosen</label>
        <input type="text" name="email_dosen" id="email"><br><br>
        <input type="submit" name="add" value="Tambah Data">
    </form>
</div>
