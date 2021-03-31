<!DOCTYPE html>
<?php
    include "show-data.php";
    include "update-data.php";
?>

<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>
            CURICULUM VITAE
        </title>
        <meta name="viewport" content="width=device-width,initial-scaled=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <nav>
            <div class="menu-mobile">
                <a href="#" onclick="showMenu()">Menu</a>
            </div>
            <ul id="menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="index.php">Profile</a></li>
            </ul>
        </nav>
        
        <section id="box-profile">
            <div class="img-profile">
                <div class="photo" style="background-image:url(assets/img/profile.JPG);"></div>
            </div>
            <div class="description">
                <h1 id="pName"><?php echo $nama; ?></h1>
                <p>Full Stack</p>
                <a href="#input-form" class="button bg-green" onclick="editForm()">Edit</a>
                <a href="cv.php" class="button border-blue">CV</a>
                <a href="resume.php" class="button border-blue">Resume</a>
            </div>
            <div class="information">
                <div class="data">
                    <p class="field">Tempat / Tanggal Lahir</p>
                    <p id="pAge" class="text-gray"><?php echo $age; ?></p>
                </div>
                <div class="data">
                    <p class="field">Jenis Kelamin</p> <!--dekor p ini ada pada (.information p.field)-->
                    <p id="pGender" class="text-gray"><?php echo $gender; ?></p> <!--dekor p ini ada pada (.information .data p)-->
                </div>
                <div class="data">
                    <p class="field">Alamat</p>
                    <p id="pLocation" class="text-gray"><?php echo $location; ?></p>
                </div>
                <div class="data">
                    <p class="field">Pendidikan Terakhir</p>
                    <p id="pPendidikan" class="text-gray"><?php echo $pendidikan; ?></p>
                </div>
                <div class="data">
                    <p class="field">Pengalaman Bekerja</p>
                    <p id="pExperience" class="text-gray"><?php echo $experience; ?> Tahun</p>
                </div>
                <div class="data">
                    <p class="field">Nomor Handphone</p>
                    <p id="pNomor" class="text-gray"><?php echo $nomor; ?></p>
                </div>
                <div class="data">
                    <p class="field">Email</p>
                    <p id="pEmail" class="text-gray"><?php echo $email; ?></p>
                </div>
            </div>
        </section>

        <section id="box-profile">
            <div class="information-navbar">
                <div class="data">
                    <p class="field-navbar">Riwayat Pendidikan</p>
                    <p class="ohemail">2006 - 2010 : SDN PERUMNAS 2 TANGERANG</p>
                    <p class="ohemail">2010 - 2013 : SMP PGRI 1 TANGERANG</p>
                    <p class="ohemail">2013 - 2016 : SMK PGRI 1 TANGERANG : Teknik Komputer dan Jaringan</p>
                    <p class="ohemail">2016 - 2020 : UNIVERSITAS MUHAMMADIYAH TANGERANG : Teknik Informatika</p>
                </div>
                <div class="data2">
                    <p class="field-navbar2">Riwayat Pekerjaan</p>
                    <ul>
                        <li>Januari 2017 - Desember 2017</li>
                    </ul>
                    <p class="ohemail2">PT. SUBUR MAKMUR SENTOSA</p>
                    <p class="ohemail3">Entry Data Processing</p>
                    <ul>
                        <li class="list">Mengoperasikan Ms.Office</li>
                        <li class="list">Troubleshooting Komputer</li>
                        <li class="list">Maintenance Hardware & Software</li>
                    </ul>
                    <ul>
                        <li>Agustus 2018 - Agustus 2020</li>
                    </ul>
                    <p class="ohemail2">PT. GRAMEDIA ASRI MEDIA</p>
                    <p class="ohemail3">Store Administrative Clerck</p>
                    <ul>
                        <li class="list">Mengoperasikan Microsoft Dynamics AX</li>
                        <li class="list">Mengoperasikan Ms.Office</li>
                        <li class="list">Troubleshooting Komputer</li>
                        <li class="list">Maintenance Hardware & Software</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Awal mula untuk membuat Form-->

        <section id="input-form">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form">
                    <label>Id User</label>
                    <input id="inpIdUser" type="text" name="id_user" value="<?php echo $id; ?>">
                </div>                
                <div class="form">
                    <label>Nama</label>
                    <input id="inpName" type="text" name="name" placeholder="Masukkan nama anda">
                </div>
                <div class="form">
                    <label>Tempat / Tanggal Lahir</label>
                    <input id="inpAge" type="text" name="age">
                </div>
                <div class="form">
                    <label>Jenis Kelamin</label>
                    <input id="inpGender" type="text" name="gender">
                </div>
                <div class="form">
                    <label>Alamat</label>
                    <input id="inpLocation" type="text" name="location">
                </div>
                <div class="form">
                    <label>Nomor Handphone</label>
                    <input id="inpNomor" type="number" name="nomor">
                </div>
                <div class="form">
                    <label>Pendidikan Terakhir</label>
                    <input id="inpPendidikan" type="text" name="pendidikan">
                </div>
                <div class="form">
                    <label>Pengalaman</label>
                    <input id="inpYears" type="number" name="years">
                </div>
                <div class="form">
                    <label>Email</label>
                    <input id="inpEmail" type="email" name="email">
                </div>
                <div class="form">
                    <input onclick="" type="submit" name="submit" value="SUBMIT" class="bg-blue">
                </div>
            </form>
        </section>

        <script>
            var formMenu = document.getElementById("input-form");
            formMenu.style.display = "none";

            function editForm(){
                if(formMenu.style.display === "none"){
                    formMenu.style.display = "block";
                }else{
                    formMenu.style.display = "none";
                }
                
                var name = document.getElementById("pName").innerHTML;
                var age = document.getElementById("pAge").innerHTML;
                var gender = document.getElementById("pGender").innerHTML;
                var location = document.getElementById("pLocation").innerHTML;
                var nomor = document.getElementById("pNomor").innerHTML;
                var pendidikan = document.getElementById("pPendidikan").innerHTML;
                var experience = document.getElementById("pExperience").innerHTML;
                var email = document.getElementById("pEmail").innerHTML;


                document.getElementById("inpName").value = name;
                document.getElementById("inpAge").value = age;
                document.getElementById("inpGender").value = gender;
                document.getElementById("inpLocation").value = location;
                document.getElementById("inpNomor").value = nomor;
                document.getElementById("inpPendidikan").value = pendidikan;
                document.getElementById("inpYears").value = experience;
                document.getElementById("inpEmail").value = email;
                
            }

            function showMenu(){
                var menu = document.getElementById("menu");
                var box = document.getElementById("box-profile");

                if(menu.style.display === "block"){
                    menu.style.display = "none";
                    box.style.paddingTop = "0px";
                }else{
                    menu.style.display = "block";
                    box.style.paddingTop = "125px";
                }
            }
        </script>
    </body>
</html>