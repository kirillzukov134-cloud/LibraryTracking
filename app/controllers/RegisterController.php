<?php
session_start();
require_once __DIR__ . '/../config/connectDB.php';
require __DIR__ . '/../helpers/helpers.php';
require __DIR__ . '/../models/UserModel.php';

$name = $_POST['name'];
$email = $_POST['email'];
$role = 'Users';

//Проверка на все заполненые поля
if(!$name || !$email){
    $_SESSION['msg-error'] = 'Не все поля заполнены...';
    redirect('../views/register.php');
    exit;
}

//Занято ли имя или почта
if(CheckingEmailAndName($pdo, $name, $email)){    
    $_SESSION['msg-error'] = 'Имя или почта уже занята';
    redirect('../views/auth.php');
    exit;
}

//Добавление читателя
if(insertUsers($pdo, $name, $email, $role)){
    $_SESSION['msg-success'] = 'Успешная регистрация';
    redirect('../views/auth.php');
    exit;
}else{
    $_SESSION['msg-error'] = 'Ошибка при регистрации';
    redirect('../views/register.php');
    exit;
}