<?php
require __DIR__ .  '/../helpers/helpers.php';
// redirect('/app/views/register.php');
// exit;
?>

<!-- Стараюсь писать правильный эталонный шаблон соврменого HTML-5 документа -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/main.css">
    <title>Главная страница сайта</title>
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <!-- там должен быть внутри тега '<a>' - тег '<img>' -->
            <a href="index.php" class="logo-site">LibraryBook</a>
        </div>    
            <nav class="nav-bar">
                <ul class="nav-ul">
                    <li><a href="#" class="nav-links">Список всех книг</a></li>
                    <li><a href="#" class="nav-links">Изменить свои данные</a></li>
                    <li><a href="#" class="nav-links">Аналитика</a></li>
                    <!-- Тест кнопка "Выход" -->
                    <li><a href="../views/logout.php" class="nav-links">Выход</a></li>
                </ul>
            </nav>
    </header>
</body>
</html>

