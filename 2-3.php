<?php
$userProfile = [
    "Name" => "Владимир Петров",
    "Address" => "г. Москва, ул. Пушкина, д. 10",
    "Phone" => "+7 (981) 433-88-55",
    "Mail" => "petrov@gmail.com"
];

foreach ($userProfile as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>