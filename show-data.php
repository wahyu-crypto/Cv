<?php
    include "koneksi.php";

    $sql = "SELECT  * FROM user";
    $result = $koneksi->query($sql);

    foreach($result as $result){
        $id = $result["id"];
        $nama = $result["nama"];
        $nomor = $result["nomor"];
        $age = $result["age"];
        $location = $result["location"];
        $experience = $result["years_experience"];
        $email = $result["email"];
        $gender = $result["gender"];
        $pendidikan = $result["pendidikan"];
    }
?>