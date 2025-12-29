<?php

require_once __DIR__ . '/helpers.php';

// Получение данных из формы регистрации

$login = $_POST['login'];
$password = $_POST['password'];

// Запись данных в базу данных

$connect = getDB();

$sql = "INSERT INTO `users` (login, password) VALUES ('$login', '$password')";

if ($connect -> query($sql) === TRUE) {
    // echo 'Регистрация прошла успешно!';
    header("Location: /login.html");
} else {
    echo 'Данный пользователь уже зарегистрирован :(';
}

