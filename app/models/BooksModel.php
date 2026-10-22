<?php
require_once __DIR__ . '/../config/connectDB.php';
require __DIR__ . '/../helpers/helpers.php';


//Показывает все книги
function allBooks($pdo){
    $sql = 'SELECT 
    Books.name, 
    Books.year_publication,
    Books.total_copies, 
    Books.available_copies, 
    Genres.categories AS Жанр 
FROM Books 
JOIN Genres ON Books.genre_id = Genres.id';
    $statement = $pdo->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}