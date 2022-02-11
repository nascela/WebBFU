<?php
/* Imagine a lot of code here */
$very_bad_unclear_name="15 chicken wings";
$order = &$very_bad_unclear_name;

$order .=" and a bear";

 echo"\nYour order is:$very_bad_unclear_name."."<br>";
//числа
$Number = 42;
echo $Number."<br>";
$MyNumber = 13;
echo $MyNumber."<br>";
$enotherNumber = 6.66;
echo $enotherNumber."<br>";
echo ($Number - $MyNumber - 17)."<br>";
$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo ($lastMonth-$thisMonth)."<br>";
//11(3) Умножение и деление
$numLanguages = 4;
$months = 11;
$days = 16;
$daysPerLanguage = ($days * $months) / $numLanguages;
echo "$daysPerLanguage"."<br>";
//12(4) cтепень
echo (8 ** 2)."<br>";