<?php

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Entrance"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Отмена авторизации.";
    exit;
}


$login = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];

if ($login === 'admin' && $password === 'megapass') {
    echo "Добро пожаловать!<br>";
    echo "Привет $login, ваш пароль $password";
} else {
    
    echo "Вход на страницу закрыт. Неверные данные.";
}
?>