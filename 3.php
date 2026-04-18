<?php
// Задание 2: Cookie для подсчета посещений
$visitCount = 0;
if (isset($_COOKIE['visit_count'])) {
    $visitCount = $_COOKIE['visit_count'] + 1;
} else {
    $visitCount = 1;
}
setcookie('visit_count', $visitCount, time() + 86400 * 30);

// Задание 3: перезагрузка каждые 5 секунд
header("Refresh: 5");

// Задание 4: базовая аутентификация
$valid_user = 'admin';
$valid_pass = '1234';

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    $_SERVER['PHP_AUTH_USER'] != $valid_user || $_SERVER['PHP_AUTH_PW'] != $valid_pass) {
    header('WWW-Authenticate: Basic realm="Введите логин и пароль"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Доступ запрещен";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Практическая работа 3</title>
</head>
<body>


<h3>Задание 1. Калькулятор</h3>
<form method="post">
    <input type="number" name="num1" placeholder="Число 1" required>
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="num2" placeholder="Число 2" required>
    <button type="submit">Вычислить</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if ($operator == '+') {
        $result = $num1 + $num2;
    } elseif ($operator == '-') {
        $result = $num1 - $num2;
    } elseif ($operator == '*') {
        $result = $num1 * $num2;
    } elseif ($operator == '/') {
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = "Ошибка: деление на ноль";
        }
    }

    echo "Результат: $num1 $operator $num2 = $result";
}
?>

<hr>


<h3>Задание 2. Счетчик посещений</h3>
<?php echo "Вы посетили эту страницу $visitCount раз(а)"; ?>

<hr>


<h3>Задание 3. Автообновление каждые 5 секунд</h3>
<?php echo "Текущее время: " . date("H:i:s"); ?>

<hr>


<h3>Задание 4. Аутентификация</h3>
<?php echo "Вы успешно авторизованы как: " . $_SERVER['PHP_AUTH_USER']; ?>

</body>
</html>