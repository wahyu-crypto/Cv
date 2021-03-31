<!DOCTYPE html>
<?php
    include 'show-data.php';
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            RESUME
        </title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <nav>
            <ul id="menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="index.php">Profile</a></li>
            </ul>
        </nav>

        <section id="box-cv">
            <div class="img-profile">
                <div class="photo" style="background-image:url(assets/img/profile.JPG);"></div>   
            </div>
            <div class="description2">
                <h1>INFORMATIKA</h1>
            </div>
            <div class="information">
                <div class="data">
                    <p class="vimis">" Saya merupakan seseorang yang sangat tertarik dengan dunia Pemrograman, Belajar bahasa - bahasa pemrograman, dan pengembangan beberapa aplikasi informasi berbasis Web. Oleh karena itu saya sangat senang sekali mengimplementasikan dan berbagi apa yang sudah saya ketahui dan miliki kepada orang lain, hingga menjadi sangat bermanfaat khususnya dalam dunia E-Commerce atau Start Up yang sedang berkembang di Era saat ini.</p>
                </div>
            </div>
            <div class="about">
                <div class="me">
                    <p class="me1">Tentang Saya</p>
                    <p class="me2"><img src="assets/img/loc1.png" width="30" height="20" alt="loc">Jalan Imam Bonjol No.3 Kp Dahung RT02 RW04</p>
                    <p class="me2"><img src="assets/img/email1.png" width="30" height="20" alt="loc">wahyurahmatfajar20@gmail.com</p>
                    <p class="me2"><img src="assets/img/hp1.png" width="30" height="20" alt="loc">082210510661</p>
                </div>
            </div>
        </section>
        <section id="box-cv2">
            <div class="biodata2">
                <h1 class="title">My Resume</h1>
            </div>
            <div class="biodata2">
                <h1 class="nama"><?php echo $nama ?></h1>
            </div>
            <div class="biodata2">
                <p class="edu">Pendidikan  <img src="assets/img/edu.jpg" width="80" height="50" alt="edu"></p>
            </div>
            <div class="tahun">
                <div class="thn1">
                    <p class="th1">2006 - 2010</p>
                    <p class="th1">2010 - 2013</p>
                    <p class="th1">2013 - 2016</p>
                    <p class="th1">2016 - 2020</p>
                </div>
            </div>
            <div class="sekolah">
                <div class="sklh">
                    <p class="sklh1">SDN PERUMNAS 2 TANGERANG</p>
                    <p class="sklh1">SMP PGRI 1 TANGERANG</p>
                    <p class="sklh1">SMK PGRI 1 TANGERANG</p>
                    <p class="sklh1">UNIVERSITAS MUHAMMADIYAH TANGERANG</p>
                </div>
            </div>
            <div class="biodata2">
                <p class="edu">Pengalaman Kerja   <img src="assets/img/history.png" width="60" height="50" alt="history"></p>
            </div>
            <div class="tahun">
                <div class="thn2">
                    <p class="th2">Teknisi Komputer</p>
                    <p class="th2">SAC / EDP</p>
                </div>
            </div>
            <div class="pekerjaan">
                <div class="kerja">
                    <p class="kerja1">Saya memulai karir berawal dari sebuah perusahaan retail yang bernama PT. Subur Makmur Sentosa pada bulan Januari 2017 dengan jobdesk bertanggung jawab untuk melaksanakan, mengelola, mengembangkan, dan memperbaiki perangkat keras dan lunak untuk infrastruktur TIK agar dukungan layanan TIK di unit kerja lancar dan tersedia dengan baik. Kontrak saya berakhir sampai Desember 2017</p>
                    <p class="kerja1">Saya diterima dan melanjurkan kembali karir saya di perusahaan retail yang bernama PT. GRAMEDIA ASRI MEDIA pada bulan Agustus 2018 sampai dengan Agustus 2020 dikarenakan kontrak saya habis. Jobdesk saya adalah mengoperasikan Sistem Microsoft Dynamics AX dan merangkap sebagai Teknisi Komputer.</p>
                </div>
            </div>
        </section>
    
    </body>
</html>

