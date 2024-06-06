<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form perubahan Data</title>
</head>
<body>
    
    <h2>Form Perubahan Data</h2>

    <?php

    $name = $_GET["name"];

    $conn = mysqli_connect("localhost", "root", "", "myportfolio");

    if (mysqli_connect_errno()) {
        echo "Koneksi ke server gagal";
        exit();
    }

    $query = "select name, email, pilihan, message from tamu ";
    $result = mysqli_query($conn, $query);

    if($result) {
        $row = mysqli_fetch_array($result);
    }
?>

<form action="update.php" method="post">
    <strong>Nama: </strong><br>
    <input type="text" name="name" size="50" maxlength="25" value="<?php echo $row[0]; ?>">
    <br><br>
    <strong>Email: </strong><br>
    <input type="text" name="email" size="50" maxlength="25" value="<?php echo $row[1]; ?>">
    <br><br>
    <strong>pilihan: </strong><br>
    <input type="text" name="pilihan" size="50" maxlength="25" value="<?php echo $row[2]; ?>">
    <br><br>
    <strong>Pesan: </strong><br>
    <input type="text" name="message" size="100" maxlength="50" value="<?php echo $row[3]; ?>">
    <br><br>
    <input type="submit" name="btnSubmit" value="Simpan">
</form>

</body>
</html>