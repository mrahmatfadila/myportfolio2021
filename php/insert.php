<?php

if (isset($_POST["btnSubmit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pilihan = $_POST["pilihan"];
    $message = $_POST["message"];

    $conn = mysqli_connect("localhost", "root", "", "myportfolio");

    if (mysqli_connect_errno()) {
        echo "Koneksi ke server gagal";
        exit();
    }

    $sql = "insert into tamu(name, email, pilihan, message) " . "values('$name', '$email', '$pilihan', '$message')";

    mysqli_query($conn, $sql);
    $num = mysqli_affected_rows($conn);

    if ($num > 0) {
        header("Location: showdata.php");
        exit();
    } else {
        echo "Data gagal di simpan ke dalam database";
    }
}

?>
