<?php
    include "koneksi.php";

    if(isset($_POST['submit'])){
        $id_user = $_POST["id_user"];
        $nama = $_POST["name"];
        $nomor = $_POST["nomor"];
        $age = $_POST["age"];
        $location = $_POST["location"];
        $experience = $_POST["years"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $pendidikan = $_POST["pendidikan"];

        $sql = "UPDATE user SET nama = '$nama', nomor = '$nomor', age = '$age', location = '$location', years_experience = '$experience', email = '$email', gender = '$gender', pendidikan = '$pendidikan' WHERE id = '$id_user'";

        if($koneksi->query($sql) == TRUE){
            echo "";
        }
    }
?>