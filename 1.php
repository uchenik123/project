<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Практическая работа 1</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
        .task { background: white; margin: 20px 0; padding: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .task h3 { margin-top: 0; color: #333; border-bottom: 2px solid #4CAF50; padding-bottom: 5px; }
        hr { margin: 20px 0; }
    </style>
</head>
<body>

<div class="task">
    <h3>Задание 1-1:</h3>
    <?php
    $intVar = 42;
    $floatVar = 3.14;
    $stringVar = "Hello, PHP!";
    $boolVar = true;
    $nullVar = null;

    echo "Тип \$intVar (42): " . gettype($intVar) . "<br>";
    echo "Тип \$floatVar (3.14): " . gettype($floatVar) . "<br>";
    echo "Тип \$stringVar ('Hello, PHP!'): " . gettype($stringVar) . "<br>";
    echo "Тип \$boolVar (true): " . gettype($boolVar) . "<br>";
    echo "Тип \$nullVar (null): " . gettype($nullVar) . "<br>";
    ?>
</div>

<div class="task">
    <h3>Задание 1-2:</h3>
    <?php
    $num1 = 25;
    $num2 = 7;

    $result = $num1 * $num2; // умножение
    echo "Число 1: $num1<br>";
    echo "Число 2: $num2<br>";
    echo "Результат умножения ($num1 * $num2) = $result";
    ?>
</div>

<div class="task">
    <h3>Задание 1-3:</h3>
    <?php
    $str1 = "PHP — это ";
    $str2 = "интересно!";

    $combined = $str1 . $str2;
    echo "Первая строка: '$str1'<br>";
    echo "Вторая строка: '$str2'<br>";
    echo "Результат конкатенации: <strong>$combined</strong>";
    ?>
</div>

<div class="task">
    <h3>Задание 1-4: Тернарный оператор сравнения</h3>
    <?php
    $var1 = 10;
    $var2 = 20;

    echo "Переменная 1: $var1<br>";
    echo "Переменная 2: $var2<br>";

    $message = ($var1 == $var2) ? "Переменные равны" : "Переменные не равны";
    echo "Результат сравнения: <strong>$message</strong><br><br>";

    ?>
</div>

</body>
</html>