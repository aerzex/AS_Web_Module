<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="src/styles/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <title>Алексеенко A.P.</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Вход</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="login.php">
                        <div class="row reg">
                            <input class="form-control" type="text" name="login" placeholder="Login">
                        </div>
                        <div class="row reg">
                            <input class="form-control" type="password" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="mabatton" name="submit" value="continue">Продолжить</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php

require_once('bd.php');

$link = mysqli_connect('db', 'root', '123456', 'bd_name');

if (isset($_POST['submit'])) {
    $username = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND pass='$password'";

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) == 1) {
        setcookie("User", $username, time() + 7200);
        header('Location: profile.php');
        exit; 
    } else {
        echo "не правильное имя или пароль";
    }
}
?>