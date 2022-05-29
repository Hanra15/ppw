<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    
</head>
<body>
    <h1>Data Mahasiswa</h1><br>
    <a href="index.php?p=tambah_mahasiswa"><button>Tambah Data</button></a><br><br>
    <table width="98%" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>NPM</th>
            <th>No Handphone</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php 
            include "koneksi.php";
            $no = 1;
            $warna1 = "#fff";
            $warna2 = "#83c3f7";
            $data = mysqli_query($conn,"Select * FROM tbl_mahasiswa");
            while($row = mysqli_fetch_array($data)){
                if($no % 2 == 0){
                   $warna = $warna1;
                }
                else{
                   $warna = $warna2;
                }  
        ?>
        <tr bgcolor=<?=$warna?>>
            <td width="3%"><?=$no++;?></td>
            <td style="text-align:left;"><?=$row['nama_mahasiswa'];?></td>
            <td width="15%"><?=$row['npm_mahasiswa'];?></td>
            <td width="12%"><?=$row['no_hp_mahasiswa'];?></td>
            <td style="text-align:left;"><?=$row['email_mahasiswa'];?></td>
            <td width="20%" style="text-align:left;"><?=$row['alamat_mahasiswa']?></td>
            <td width="12%">
                <a href="index.php?p=edit_mahasiswa&id_mahasiswa=<?=$row['id_mahasiswa'];?>"><button>Edit</button></a>
                <a href="index.php?p=hapus_mahasiswa&id_mahasiswa=<?=$row['id_mahasiswa'];?>"><button>Hapus</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
