<?php
//date le seguenti variabili:
/*
$1text = "Marco";
$text2 = "hai";
$text.3 ="sete";
$text4  = "?";
@text5 ="Perchè";
$te-xt6 = '$text2';
$text7 = 'bevuto';
$text8 = "tutto";
*/
//correggi eventuali errori e stampa correttamente la stringa "Marco hai sete? Perchè hai bevuto tutto."

$text1 =  "Marco ";
$text2 = "hai ";
$text3 = "sete";
$text4 = "? ";
$text5 = "Perchè ";
$text6 = "$text2"; // so che funziona tutto ma potevi anche riassegnarla in questo modo $text6 = $text2 -> senza apici
$text7 = "bevuto ";
$text8 =  "tutto.";

$stringa_finale= $text1 .  $text2 . $text3 . $text4 . $text5 . $text6 . $text7  . $text8; //
echo $stringa_finale;
