<?php
require_once __DIR__ . '/../../config/connectDB.php';
require __DIR__ . '/../../models/BooksModel.php';

$Books = allBooks($pdo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/style/main.css">
    <link rel="stylesheet" href="../../public/assets/style/sidebar.css">
    <title>Cписок всех книг</title>
</head>
<body>
    <?php
    include '../../public/index.php';
    ?>
    <main class="main-container">
        <?php 
        include '../../public/sidebar.php'; 
        ?>
        <div class="table-book">
            <table>
                <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Дата публикации</th>
                        <th>общее количество экземпляров</th>
                        <th>доступные экземпляры</th>
                        <th>Жанр</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($Books AS $book):?>
                    <tr>
                        <td><?php echo $book['name']; ?></td>
                        <td><?php echo $book['year_publication']; ?></td>
                        <td><?php echo $book['total_copies']; ?></td>
                        <td><?php echo $book['available_copies']; ?></td>
                        <td><?php echo $book['Жанр']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
