<?php

    $dbname = "myportfolio";
    $host   = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if(mysqli_connect_errno()){
        echo "Koneksi ke server database gagal.";
        exit();
    }



?>