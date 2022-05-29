<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website FTS UIKA</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <!-- div class utama -->
    
        <!-- header -->
        <div class="header">
            <div class="image">
                <img src="img/Logo_ft.png" alt="">    
            </div>
            <h1>Website Teknik Informatika</h1>
            <p>Informasi aktual seputar TI | by Hans_tech</p>
            
        </div>
        <!-- teks berjalan -->
        <div class="teksberjalan">
            <marquee behavior="" direction="">Selamat datang di Website Kampus</marquee>
        </div>
        <!-- container isi -->
        <div class="container">
            <!-- sidebar container -->
            <div class="sidebar">
                <ul>
                    <li><a href="index.php?p=beranda">Beranda</a></li>
                    <li><a href="index.php?p=mahasiswa">Data Mahasiswa</a></li>
                    <li><a href="index.php?p=dosen">Data Dosen</a></li>
                    <li><a href="index.php?p=matkul">Mata Kuliah</a></li>
                    <li><a href="index.php?p=prodi">Program Studi</a></li>
                </ul>
            </div>
            <!-- isi content -->
            <div class="content">
                <?php
                $pages_dir = 'halaman';
                if(!empty($_GET['p'])){
                    $pages = scandir($pages_dir,0);
                    unset($pages[0], $pages[1]);
                    $p = $_GET['p'];
                    if(in_array($p.'.php',$pages)){
                        include($pages_dir.'/'.$p.'.php');
                    }
                    else{
                        echo "Halaman tidak ditemukan";
                    }
                }
                else{
                    include($pages_dir.'/beranda.php');
                }
                ?>
            </div>
        </div>

        <div class="clear"></div>

        <!-- footer container -->
        <div class="footer">
            <i>Copyright 2021 all rigth reserved - Prodi Teknik Informatika - Universitas IBN Khaldun Bogor</i>
        </div>
    
</body>
</html>
