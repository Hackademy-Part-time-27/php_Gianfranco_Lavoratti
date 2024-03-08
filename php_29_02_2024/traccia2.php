<?php
/*
function calcolaMediaNumeriPari($numbers) {
    $count = 0;
    $sum = 0;

    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            $sum += $number;
            $count++;
        }
    }

    if ($count == 0) {
        return "Non ci sono numeri pari.";
    } else {
        return $sum / $count;
    }
};


$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$media = calcolaMediaNumeriPari($numbers);
echo "La media dei numeri pari è: " . $media;
*/

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$counter = 0;
$totale = 0;

foreach ($numbers as $numero) {
    if ($numero % 2 == 0) {
        $counter++;
        $totale += $numero;
        }
}
 echo "La somma dei numeri pari è: $totale \n";
 echo "quindi la media di tutti i numeri  pari è: ".($totale/$counter)."\n";
?>