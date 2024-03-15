<?php
$valid_username = "admin";
$valid_password = "password";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_username && $password === $valid_password) {
    echo "Добро пожаловать, $username!";
} else {
    echo "Ошибка: Неверное имя пользователя или пароль!";
}
?>
