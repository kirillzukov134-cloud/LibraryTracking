<?php
session_start();
require_once __DIR__ . '/../config/connectDB.php';
require __DIR__ . '/../helpers/helpers.php';
require __DIR__ . '/../models/UserModel.php';

$name = $_POST['name'];
$email = $_POST['email'];


$authUsers = authUsers($pdo, $name);

if(!$authUsers){
    $_SESSION['msg-error'] = 'Такого пользователя не существует';
    redirect('../views/auth.php');
    exit;
}else{
    $_SESSION['authUsers'] = [
        'name' => $authUsers['name'],
        'email' => $authUsers['email'],
        'role' => $authUsers['role']
    ];
    
    if($_SESSION['authUsers']['role'] === 'Admin'){
        redirect('../public/index.php');
        exit;
    }else{
        redirect('../public/index.php');
        exit;
    }
}



