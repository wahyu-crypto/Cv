<!DOCTYPE html>
<?php
    include "show-data.php";
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

    <section id="box-profile">
        <div class="information-navbar2">
            <div class="data2">
                <p class="tgl">Tangerang, 12 Desember 2020</p>
            </div>
            <div class="resume">
                <p>Kepada Yth,</p>
                <p>Kepala bagian HRD</p>
                <p>Perihal : Lamaran Pekerjaan</p>
                <p>Dengan Hormat,</p>
                <p>Berdasarkan informasi yang saya terima dari sosial media, perusahaan Ibu/Bapak sedang membutuhkan tenaga kerja. Dengan surat lamaran kerja ini saya bermaksud untuk bergabung dengan perusahaan yang Ibu/Bapak pimpin.</p>
                <p>Berikut ini adalah biodata singkat saya.</p>
            </div>
            <div class="biodata">
                <div class="resume2">
                    <p class="field-resume">Nama</p>
                </div>
                <div class="resume2">
                    <p class="field-resume">Tempat / Tanggal Lahir</p>
                </div>
                <div class="resume2">
                    <p class="field-resume">Jenis Kelamin</p>
                </div>
                <div class="resume2">
                    <p class="field-resume">Alamat</p>
                </div>
                <div class="resume2">
                    <p class="field-resume">Pendidikan Terakhir</p>
                </div>
                <div class="resume2">
                    <p class="field-resume">Handphone</p>
                </div>
            </div>
            <div class="biodata-diri">
                <div class="resume3">
                    <p class="field-resume2">:</p>
                    <p><?php echo $nama; ?></p>
                </div>
                <div class="resume3">
                    <p class="field-resume2">:</p>
                    <p><?php echo $age; ?></p>
                </div>
                <div class="resume3">
                    <p class="field-resume2">:</p>
                    <p><?php echo $gender; ?></p>
                </div>
                <div class="resume3">
                    <p class="field-resume2">:</p>
                    <p><?php echo $location; ?></p>
                </div>
                <div class="resume3">
                    <p class="field-resume2">:</p>
                    <p><?php echo $pendidikan; ?></p>
                </div>
                <div class="resume3">
                    <p class="field-resume2">:</p>
                    <p><?php echo $nomor; ?></p>
                </div>
                <div class="resume">
                    <p>Untuk melengkapi beberapa data yang diperlukan sebagai bahan pertimbangan Bapak/Ibu pimpinan diwaktu yang akan datang, saya lampirkan juga kelengkapan data diri sebagai berikut:</p>
                </div>
                <div class="lampiran">
                    <ul>
                        <li>Pas Foto</li>
                        <li>Curriculum Vitae</li>
                        <li>Fotocopy Ijazah Terakhir</li>
                        <li>Fotocopy Transkrip Nilai</li>
                        <li>Fotocopy SKCK</li>
                        <li>Fotocopy Surat Pengalaman Bekerja</li>
                    </ul>
                </div>
                <div class="resume">
                    <p>Saya berharap bisa menjadi salah satu bagian dari perusahaan Bapak/Ibu pimpin agar saya dapat menjelaskan lebih detail lagi mengenai potensi dan kemampuan saya yang bisa berguna untuk perusahaan yang Bapak/Ibu pimpin saat ini.</P>
                </div>
                <div class=" resume">
                    <p>Demikian surat lamaran ini saya buat dengan sebenar-benarnya dan sejujur-jujurnya, dan atas perhatian serta kerjasamanya saya ucapkan terima kasih.</p>
                </div>
                <div class="data2">
                    <p class="hormat">Hormat Saya,</p>
                    <p class="hormat"><?php echo $nama; ?></p>
                </div>
            </div>
        </div>
    </section>
    
    </body>
</html>

