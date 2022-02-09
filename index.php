<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<style>
    form{
        display: flex;
        flex-direction: column;
        width: 200px;
        margin: auto;
    }
    input{
        margin: 10px 0;
        padding: 5px;
    }
    button{
        padding: 5px;
        cursor: pointer;
    }
    h1{
        font-size: 25px;
    }
    .msg{
        border: 2px solid orange;
        border-radius: 3px;
        padding: 5px;
        text-align: center;
    }
</style>
<body>
    <form action="signin.php" method="post">
        <h1>АВТОРИЗАЦИЯ</h1>
        <label>Логин:</label>
        <input type="text" name="log" placeholder="логин">
        <label>Пароль:</label>
        <input type="password" name="pass" placeholder="пароль">
        <button type="submit">Войти</button>
        <?php
            if($_SESSION['message']){
            echo '
            <p class="msg">' . $_SESSION['message'] . '</p>
            ';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>
