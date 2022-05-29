<?php 
    include 'koneksi.php';
    if(isset($_POST['update'])){
        $id_dosen = $_POST['id_dosen'];
        $nik_dosen = $_POST['nik_dosen'];
        $nama_dosen = $_POST['nama_dosen'];
        $email_dosen = $_POST['email_dosen'];
        $queryubah = "UPDATE tbl_dosen_kampus SET nik_dosen='$nik_dosen', nama_dosen='$nama_dosen', email_dosen='$email_dosen' WHERE id_dosen=$id_dosen";
        $update = mysqli_query($conn,$queryubah);
        header("Location:index.php?p=dosen");
    }
    $id_dosen = $_GET['id_dosen'];
    $queryambil = "SELECT * FROM tbl_dosen_kampus WHERE id_dosen='$id_dosen'";
    $hasil = mysqli_query($conn,$queryambil);
    $row = mysqli_fetch_array($hasil);
?>
<div class="formstyle">
    <h2>Halaman Ubah Data Dosen</h2>
    <form action="index.php?p=edit_dosen" id="dosen" method="post">
        <label for="nik">NIK</label>
        <input type="hidden" name="id_dosen" id="dosen" value="<?php echo $row['id_dosen'];?>">
        <input type="number" name="nik_dosen" id="nik" value="<?php echo $row['nik_dosen'];?>"><br>
        <label for="nama">Nama Dosen</label>
        <input type="text" name="nama_dosen" id="nama" value="<?=$row['nama_dosen'];?>"><br>
        <label for="email">Email Dosen</label>
        <input type="text" name="email_dosen" id="email" value="<?=$row['email_dosen'];?>"><br>
        <input type="submit" name="update" value="Edit Data">
    </form>
</div>
    