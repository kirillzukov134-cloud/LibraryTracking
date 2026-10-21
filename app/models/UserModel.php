<?php
require_once __DIR__ . '/../config/connectDB.php';
require_once __DIR__ . '/../helpers/helpers.php';

//Добавление пользователя
function insertUsers($pdo, $name, $email, $role = 'Users'){
    $sql = "INSERT INTO Readers (name, email, created_at, role) VALUES (:name, :email, NOW(), :role)";
    $statement = $pdo->prepare($sql);
    return $statement->execute([
        ':name' => $name,
        ':email' => $email,
        ':role' => $role
    ]);
}

//Проверка почты и имя
function CheckingEmailAndName($pdo, $name, $email){
    $sql = "SELECT COUNT(*) FROM Readers WHERE name = :name OR email = :email";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        ':name' => $name,
        ':email' => $email
    ]);
    return $statement->fetchColumn() > 0;
}

// Проверка пользователя
function authUsers($pdo, $name){
    $sql = "SELECT name, email, role FROM Readers WHERE name = :name";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        ':name' => $name
    ]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}