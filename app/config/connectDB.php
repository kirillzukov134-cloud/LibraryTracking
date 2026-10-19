<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=LibraryBook', 'root', '');
    // echo 'Успех...';
}catch(PDOException $error){
    die('Error: ' . $error->getMessage());
}
