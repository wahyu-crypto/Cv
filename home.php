<!DOCTYPE html>
<?php
    include "koneksi.php";
    include "show-data.php";
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            Home
        </title>
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

    <section id="box-contact">
        <div class="information-navbar">
            <div class="data">
                <p class="field-navbar">Biografi</p>
            </div>
        </div>
    </section>
    
    </body>
</html>

