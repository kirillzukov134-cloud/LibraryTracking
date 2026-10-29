<?php
session_start();
?>

<!-- Стараюсь писать правильный эталонный шаблон соврменого HTML-5 документа -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/main.css">
    <link rel="stylesheet" href="assets/style/sidebar.css">
    <title>Главная страница сайта</title>
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <!-- там должен быть внутри тега '<a>' - тег '<img>' -->
            <a class="logo-site">LibraryBook</a>
        </div>
        <div class="user-profile">
            <span class="profile-text">Профиль игрока: <?php echo "Hello"; ?></span>
        </div>
            <nav class="nav-bar">
                <ul class="nav-ul">
                    <li><a href="/app/views/books/books.php" class="nav-links">Список всех книг</a></li>
                    <li><a href="#" class="nav-links">Изменить свои данные</a></li>
                    <li><a href="#" class="nav-links">Мой профиль</a></li>
                    <?php if($_SESSION['authUsers']['role'] === 'Admin'): ?>
                    <li><a href="/app/views/analytics/analytics.php" class="nav-links">Аналитика</a></li>
                    <?php endif; ?>
                    <!-- Тест кнопка "Выход" -->
                    <li><a href="/app/views/logout.php" class="nav-links">Выход</a></li>
                </ul>
            </nav>
    </header>
</body>
</html>

