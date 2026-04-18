<?php
// Задание 1-1: 
$intVar = 42;
$floatVar = 3.14;
$stringVar = "Hello";
$boolVar = true;
$nullVar = null;

echo "=== Задание 1-1 ===<br>";
echo gettype($intVar) . "<br>";
echo gettype($floatVar) . "<br>";
echo gettype($stringVar) . "<br>";
echo gettype($boolVar) . "<br>";
echo gettype($nullVar) . "<br><br>";

// Задание 1-2: 
$a = 25;
$b = 7;
$result = $a * $b;

echo "=== Задание 1-2 ===<br>";
echo "$a * $b = $result<br><br>";

// Задание 1-3: 
$str1 = "PHP — это ";
$str2 = "интересно!";
$combined = $str1 . $str2;

echo "=== Задание 1-3 ===<br>";
echo "$combined<br><br>";

// Задание 1-4: 
$x = 10;
$y = 20;
$message = ($x == $y) ? "равны" : "не равны";

echo "=== Задание 1-4 ===<br>";
echo "Переменные $message";
?>