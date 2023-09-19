<?php

session_start();

if ($_SESSION["login"] == true) {
    header('Location: /session/member.php');
    exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == "Astronot" && $_POST['password'] == 'Astronot') {
        //Sukses
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'Astronot';
        header('Location: /session/member.php');
        exit();
    } else {
        // Gagal
        $error = "Password Atau Username Salah";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php if ($error != "") { ?>
        <h2><?= $error ?> </h2>
    <?php } ?>

    <h1>Login</h1>
    <form action="/session/login.php" method="post">
        <label> Username :
            <input type="text" name="username">
        </label>
        <br>

        <label>Password :
            <input type="password" name="password">
        </label>
        <br>

        <input type="submit" value="Login">

    </form>
</body>

</html>