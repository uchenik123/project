<?php
$Numbers = []; 

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) { 
        $Numbers[] = $i; 
    }
}

echo "Результат: ";
foreach ($Numbers as $number) {
    if ($number % 5 != 0) { 
        echo $number . " ";
    }
}
?>