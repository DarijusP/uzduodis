<?php

$pradinis = 10;
$number = $pradinis;

$iteracijos = 0;
echo "Rezultatai:\n";    
    while ($number != 1) {
        if ($number % 2 == 0) {
            $number = $number / 2;
        } else {
            $number = 3 * $number + 1;
        }
        
        echo $number . "\n";
        $iteracijos++;
    }


echo "Pradinis skaičius: $pradinis\n";

echo "Iteracijų kiekis: $iteracijos\n";

?>