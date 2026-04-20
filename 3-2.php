<?php
// Если куки нет, ставим 0, прибавляем 1.
$visits = isset($_COOKIE['visit_count']) ? (int)$_COOKIE['visit_count'] : 0;
$visits++;

setcookie('visit_count', $visits, time() + 3600, "/");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="data:,">
</head>
<body>
    <h2>Счетчик посещений</h2>
    <p>Вы посетили эту страницу: <?php echo $visits; ?> раз(а).</p>
</body>
</html>