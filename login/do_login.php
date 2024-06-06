<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<?php
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $pwd   = $_POST["pwd"];

        require("connectdb.php");

        $query = "select nama from login " . 
                    "where email = '$email' and pwd = md5('$pwd')";

        $result = mysqli_query($conn, $query);
        $num = mysqli_num_rows($result);

        if ($num == 1) {
            list ($nama) = mysqli_fetch_array($result);
            ?>
            <?php
                header("Location: " . 
                "http://localhost/myportfolio/dasbord/index.php");
            ?>

            <?php
        } else {
            header("Location: " . 
                "http://localhost/myportfolio/login/index.html");
        }
    }
?>


</body>
</html>