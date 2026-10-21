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
    <title>Регистрация</title>
</head>
<body class="form">
    <form action="../controllers/RegisterController.php" method="post" class="form-filling">
        <h3>Регистрация</h3>
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
        <button>Зарегистрироваться</button>
        <p>
            Есть аккаунт?<a href="auth.php" class="redirect"> авторизоваться</a>
        </p>
        <?php msgErrorAndSuccess();?>
    </form>
</body>
</html>