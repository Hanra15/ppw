<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
</head>
<body>
    <h1>Data Dosen Kampus</h1><br>
    <a href="index.php?p=tambah_dosen"><button>Tambah Data</button></a><br><br>
    <table width="98%" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Dosen</th>
            <th>NIK</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php 
            include "koneksi.php";
            $no = 1;
            $warna1 = "#fff";
            $warna2 = "#83c3f7";
            $data = mysqli_query($conn,"Select * FROM tbl_dosen_kampus");
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
            <td style="text-align:left;"><?=$row['nama_dosen'];?></td>
            <td><?=$row['nik_dosen'];?></td>
            <td style="text-align:left;"><?=$row['email_dosen'];?></td>
            <td width="12%">
                <a href="index.php?p=edit_dosen&id_dosen=<?=$row['id_dosen'];?>"><button>Edit</button></a>
                <a href="index.php?p=hapus_dosen&id_dosen=<?=$row['id_dosen'];?>"><button>Hapus</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
