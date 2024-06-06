<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
    <h2>Status Registrasi</h2>

    <?php
        if (isset($_POST["daftar"])) {
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $pwd   = $_POST["pwd"];

            require("connectdb.php");

            $sql = "insert into login(nama, email, pwd) " . 
            "values('$nama', '$email', md5('$pwd'))";

            mysqli_query($conn, $sql);
            $num = mysqli_affected_rows($conn);

            if ($num > 0) {
                ?>

                <?php
                header("Location: " . 
                "http://localhost/myportfolio/dasbord/index.php");
                ?>
                <?php
            } else {
                ?>
                Proses registrasi gagal. Silahkan ulangi!<br>
                [<a href="index.html">Kembali ke form registrasi</a>]
                <?php
            }
        }
    ?>


</body>
</html>