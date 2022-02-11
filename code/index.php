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

//13(5) Операторы присвоения

$myNum = 349;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo $answer."<br>";

//14(6) Математические функции

$a = 10;
$b = 3;
echo ($a % $b)."<br>";
if (($a % $b) == 0)
    echo "Делиться ", $a / $b ;
else
    echo "Делиться с остатком ", $a % $b ;

echo "<br>";

$st = pow(2, 10);
echo $st."<br>";
echo sqrt(245)."<br>";

$array = [4,2,5,19,13,0,10];
$sum = 0;
foreach ($array as $value)
    $sum = $sum + pow($value, 2);
echo sqrt($sum)."<br>";

echo round(sqrt(379), 0)."<br>";
echo round(sqrt(379), 1)."<br>";
echo round(sqrt(379), 2)."<br>";

$arr2 = array ('ceil' => ceil(sqrt(587)), 'floor' => floor(sqrt(587)));
echo $arr2['ceil']."<br>";
echo $arr2['floor']."<br>";

echo min(4, -2, 5, 19, -130, 0, 10)."<br>";
echo max(4, -2, 5, 19, -130, 0, 10)."<br>";

echo rand(1, 100)."<br>";
$arr3 = [10];
for ($i = 0; $i < 10; $i++)
{
    $arr[$i] = rand(1,100);
    echo $arr[$i]." ";
}

echo "<br>".abs(($b-$a))."<br>";

$arr3 = [1, 2, -1, -2, 3, -3];
foreach ($arr3 as $value) {
    $value = abs($value);
    echo $value." ";
}
echo"<br>";
$a = 42;
$dividers = [];
for ($i = 1; $i <= $a; $i++)
    if ($a % $i == 0)
        $dividers[] = $i;
print_r($dividers);

$arr4 = [1,2,3,4,5,6,7,8,9,10];
$sum = 0;
foreach ($arr4 as $value) {
    $sum += $value;
    if ($sum > 10)
    {
        echo "<br>".$value. "<br>";
        break;
    }
}

//15(7) Функции

function printStringReturnNumber(string $string):int
{
    echo $string."<br>";
    return 42;
}
$myNum = printStringReturnNumber('hello world!!!');
echo $myNum."<br>";

