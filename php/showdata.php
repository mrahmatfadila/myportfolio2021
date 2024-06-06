<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu Database</title>
</head>
<body>
    
<h2>Data Tamu yang sudah kirim</h2>

<?php
$conn = mysqli_connect("localhost", "root", "", "myportfolio");

if (mysqli_connect_errno()) {
    echo "Koneksi ke server gagal";
    exit();
}

$query = "SELECT name, email, pilihan, message FROM tamu ORDER BY name";
$result = mysqli_query($conn, $query);

if ($result) {
    ?>
    <h4><u>Daftar Tamu Yang Sudah Datang ke Website</u></h4>

    <table border="1">
        <tr>
            <th width="110">Nama</th>
            <th width="110">Email</th>
            <th width="50">Pilihan</th>
            <th width="300">Pesan</th>
            <th width="50">Aksi</th>
        </tr>
        <?php 
        while ($row = mysqli_fetch_row($result)) {
            $name = $row[0];
            $email = $row[1];
            $pilihan = $row[2];
            $message = $row[3];
            ?>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $pilihan; ?></td>
                <td><?php echo $message; ?></td>
                <td>
                    <a href="form-update.php?name=<?php echo $name; ?>">Edit</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

    <br>
    <!-- Tautan untuk kembali ke halaman formulir -->
    <a href="../index.html">Kembali ke Formulir</a>
    <br>

    <?php
    mysqli_free_result($result);
}

mysqli_close($conn);
?>

<h2>Data Tamu Registrasi</h2>

<?php
$conn = mysqli_connect("localhost", "root", "", "myportfolio");

if (mysqli_connect_errno()) {
    echo "Koneksi ke server gagal";
    exit();
}

$query = "SELECT nama, email, pwd FROM login ORDER BY nama";
$result = mysqli_query($conn, $query);

if ($result) {
    ?>
    <h4><u>Daftar Tamu Registrasi</u></h4>

    <table border="1">
        <tr>
            <th width="110">Nama</th>
            <th width="110">Email</th>
            <th width="500">Password</th>
        </tr>
        <?php 
        while ($row = mysqli_fetch_row($result)) {
            $nama = $row[0];
            $email = $row[1];
            $pwd = $row[2];
            ?>
            <tr>
                <td><?php echo $nama; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $pwd; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <br>
    <!-- Tautan untuk kembali ke halaman formulir -->
    <a href="../index.html">Kembali ke Formulir</a>
    <br>

    <?php
    mysqli_free_result($result);
}

mysqli_close($conn);
?>

</body>
</html>
