<?php 
    include 'koneksi.php';
    if(isset($_POST['add'])){
        $no = $_POST['no'];
        $npm_mahasiswa = $_POST['npm_mahasiswa'];
        $nama_mahasiswa = $_POST['nama_mahasiswa'];
        $email_mahasiswa = $_POST['email_mahasiswa'];
        $query = "INSERT INTO tbl_mahasiswa VALUES('$no','$npm_mahasiswa','$nama_mahasiswa','$email_mahasiswa')";
        $add = mysqli_query($conn,$query);
        header("location:index.php?p=mahasiswa");
    }
?>
<div class="formstyle">
    <h2>Form Tambah mahasiswa</h2>
    <form action="index.php?p=tambah_mahasiswa" id="mahasiswa" method="post">
        <label for="npm">Npm</label>
        <input type="hidden" name="id_mahasiswa" id="id_mahasiswa">
        <input type="text" name="npm_mahasiswa" id="npm"><br><br>
        <label for="nama">Nama mahasiswa</label>
        <input type="text" name="nama_mahasiswa" id="nama"><br><br>
        <label for="email">Email mahasiswa</label>
        <input type="text" name="email_mahasiswa" id="email"><br><br>
        <input type="submit" name="add" value="Tambah Data">
    </form>
</div>
