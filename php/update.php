<?php 
    if(isset($_POST["btnSubmit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pilihan = $_POST["pilihan"];
        $message = $_POST["message"];

        $conn = mysqli_connect("localhost", "root", "", "myportfolio");
        if (mysqli_connect_errno()) {
            echo "Koneksi ke server gagal";
            exit();
        }

        $sql = "update tamu " . 
                "set email = '$email', " . 
                "   pilihan = '$pilihan', " . 
                "   message = '$message' " . 
                "where name = '$name'";

        mysqli_query($conn, $sql);
        $num = mysqli_affected_rows($conn);

        if ($num > 0) {
            echo "Perubahan data telah di simpan.";
            ?> <br><br>
            <a href="showdata.php">Lihat perubahan</a> <?php
        } else {
            echo "Perubahan data gagal di simpan.";
        }
    }
?>