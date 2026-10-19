<?php
session_start();
require __DIR__ . '/../helpers/helpers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/style/main.css">
    <title>Авторизация</title>
</head>
<body>
    <form action="#" method="post" class="form-filling">
        <label> Ваше ФИО
            <input
            type="text"
            name="name"
            placeholder="Введите имя">
        </label>
        <label> Почта
            <input
            type="email"
            name="email"
            placeholder="Введите почту">
        </label>
        <button>Авторизоваться</button>
        <p>
            Нет аккаунта?<a href="register.php">зарегистрироваться</a>
        </p>
        <?php msgErrorAndSuccess(); ?>
    </form>
</body>
</html>