<?php
session_start();
require_once __DIR__ . '/../config/connectDB.php';

/*
Редирект на другие страницы
*/
function redirect($path){
    header("Location: $path");
    exit;
}

/*
Успех/не успех (вывод сообщения)
*/
function msgErrorAndSuccess(){
    if(!empty($_SESSION['msg-error']))
        echo '<p class="msg-error">' . $_SESSION['msg-error'] . '</p>';
    unset($_SESSION['msg-error']);
    
    if(!empty($_SESSION['msg-success']))
        echo '<p class="msg-error">' . $_SESSION['msg-success'] . '</p>';
    unset($_SESSION['msg-success']);
}