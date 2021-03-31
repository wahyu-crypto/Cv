<?php
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
        id,
        nama,
        role,
        nomor,
        age,
        location,
        years_experience,
        email,
        gender
    ) VALUE
    (
        '1',
        'Wahyu Rahmat Fajar',
        'Full Stack',
        '082210510661',
        '20',
        'Tangerang',
        '2',
        'wahyurahmatfajar20@gmail.com',
        'Laki - Laki'
    )";

    if($koneksi->query($sql) == TRUE){
        echo "Insert Data berhasil";
    } else {
        echo "Insert Data gagal";
    }
?>