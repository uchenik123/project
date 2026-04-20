<?php
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n1 = $_POST['num1'] ?? 0;
    $n2 = $_POST['num2'] ?? 0;
    $op = $_POST['operator'] ?? '';

    switch ($op) {
        case '+': $result = $n1 + $n2; break;
        case '-': $result = $n1 - $n2; break;
        case '*': $result = $n1 * $n2; break;
        case '/': $result = ($n2 != 0) ? ($n1 / $n2) : 'Ошибка (деление на 0)'; break;
        default: $result = 'Неизвестная операция';
    }
}
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Калькулятор</h2>
    <form method="POST">
        <input type="number" name="num1" required placeholder="Число 1">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" required placeholder="Число 2">
        <button type="submit">=</button>
    </form>
    <?php if ($result !== ''): ?>
        <p>Результат: <b><?php echo $result; ?></b></p>
    <?php endif; ?>
</body>
</html>