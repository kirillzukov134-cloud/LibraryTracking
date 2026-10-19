<?php
require_once __DIR__ . '/../config/connectDB.php';
require_once __DIR__ . '/../helpers/helpers.php';

function insertUsers($pdo, $name, $email){
    $sql = "INSERT INTO Readers (name, email, created_at) VALUES (:name, :email, NOW())";
    $statement = $pdo->prepare($sql);
    return $statement->execute([
        ':name' => $name,
        ':email' => $email
    ]);
}

function CheckingEmailAndName($pdo, $name, $email){
    $sql = "SELECT COUNT(*) FROM Readers WHERE name = :name OR email = :email";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        ':name' => $name,
        ':email' => $email
    ]);
    return $statement->fetchColumn() > 0;
}

