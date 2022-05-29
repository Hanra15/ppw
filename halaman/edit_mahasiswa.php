<?php 
    include 'koneksi.php';
    if(isset($_POST['update'])){
        $id_mahasiswa = $_POST['id_mahasiswa'];
        $npm_mahasiswa = $_POST['npm_mahasiswa'];
        $nama_mahasiswa = $_POST['nama_mahasiswa'];
        $email_mahasiswa = $_POST['email_mahasiswa'];
        $queryubah = "UPDATE tbl_mahasiswa SET npm_mahasiswa='$npm_mahasiswa', nama_mahasiswa='$nama_mahasiswa', email_mahasiswa='$email_mahasiswa' WHERE id_mahasiswa=$id_mahasiswa";
        $update = mysqli_query($conn,$queryubah);
        header("Location:index.php?p=mahasiswa");
    }
    $id_mahasiswa = $_GET['id_mahasiswa'];
    $queryambil = "SELECT * FROM tbl_mahasiswa WHERE id_mahasiswa='$id_mahasiswa'";
    $hasil = mysqli_query($conn,$queryambil);
    $row = mysqli_fetch_array($hasil);
?>
<div class="formstyle">
    <h2>Halaman Ubah Data mahasiswa</h2>
    <form action="index.php?p=edit_mahasiswa" id="mahasiswa" method="post">
        <label for="npm">npm</label>
        <input type="hidden" name="id_mahasiswa" id="mahasiswa" value="<?php echo $row['id_mahasiswa'];?>">
        <input type="text" name="npm_mahasiswa" id="npm" value="<?php echo $row['npm_mahasiswa'];?>"><br>
        <label for="nama">Nama mahasiswa</label>
        <input type="text" name="nama_mahasiswa" id="nama" value="<?=$row['nama_mahasiswa'];?>"><br>
        <label for="email">Email mahasiswa</label>
        <input type="text" name="email_mahasiswa" id="email" value="<?=$row['email_mahasiswa'];?>"><br>
        <input type="submit" name="update" value="Edit Data">
    </form>
</div>
    