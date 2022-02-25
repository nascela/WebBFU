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

//16(8) Функции 2

function increaseEnthusiasm(string $string):string
{
    $string.='!';
    return $string;
}
echo increaseEnthusiasm('Hello world')."<br>";

function repeatThreeTimes(string $string):string
{
    $string.=$string.$string;
    return $string;
}
echo repeatThreeTimes(increaseEnthusiasm('Hello world'))."<br>";

function cut(string $string, int $int=10):string
{
    $ret = "";
    for($i = 0; $i < $int; $i++)
        $ret .= $string[$i];
    return $ret;
}
echo cut("I need help ", 6)."<br>";

function arrayPrint($arr, $num)
{
    if ($num < sizeof($arr))
    {
        echo $arr[$num]." ";
        arrayPrint($arr, $num+1);
    }
}
$array = array(1,2,3,4,5);
arrayPrint($array, 0);

function arraySum($num)
{
    $sum = 0;
    while ($num > 0)
    {
        $sum+=$num%10;
        $num/=10;
    }
    if ($sum > 9) return arraySum($sum);
    else return($sum);
}
echo "<br>".arraySum(233)."<br>";

//17(9) Массивы

$arr=[];
for ($i = 1; $i <= 10; $i++)
{
    $arr[$i-1]='';
    for ($j = 0; $j < $i; $j++)
        $arr[$i-1].='x';
}
print_r($arr);



function arrayFill($vol, int $num)
{
    $newArr = [];
    for ($i = 1; $i <= $num; $i++) {
        $newArr[$i - 1] = '';
        for ($j = 0; $j < $i; $j++)
            $newArr[$i - 1] .= $vol;
    }
    return $newArr;
}
echo "<br>";

print_r(arrayFill('н',5));
echo "<br>";


$arr2 = [[1,2,3],[4,5],[6], [1,2,3]];
$sum = 0;
foreach ($arr2 as $value)
{
    foreach ($value as $num)
    {
        $sum += $num;
    }
}
echo "<br>".$sum."<br>";

$arr3 = [];
$counter = 1;
for($i = 0; $i < 3; $i++)
    for($j = 0; $j < 3; $j++)
        $arr3[$i][$j] = $counter++;
print_r($arr3);

$arr4=[2,5,3,9];
$result = $arr4[0] * $arr4[1] + $arr4[2] * $arr4[3];
echo "<br>".$result."<br>";

$user = ['name' => 'Sergei', 'surname' => 'Aleksandrov', 'patronymic' => 'Maksimovich', 5, 4, 2002];
echo $user['surname']." ".$user['name']." ".$user['patronymic']."<br>";

$date = ['year' => 2022, 'month' => '02', 'day' => '11'];
echo "Today is {$date['year']}-{$date['month']}-{$date['day']}<br>";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo sizeof($arr)."<br>";
echo $arr[sizeof($arr)-1]."<br>";
echo $arr[sizeof($arr)-2]."<br>";

//18(10) if else


function moreThan10(int $a, int $b):bool
{
    if ($a+$b > 10) return true;
    else return false;
}

function equal(int $a, int $b):bool
{
    if ($a == $b ) return true;
    else return false;
}

$test = 0;
echo ($test == 0) ? 'Верно<br>' : 'Неверно<br>';

$age = rand(0, 150);
echo "age = {$age}<br>";
if ($age < 10) echo "{$age} is lower than 10<br>";
else if ($age > 99) echo "{$age} is higher than 99<br>";
else
{
    $sum = 0;
    for ($i = 0; $i < strlen($age); $i++)
    {
        $sum += $age % 10;
        $age /= 10;
    }
    echo ($sum > 9) ? "sum is two-digit<br>" : "sum is one-digit<br>";
}

$arr = [3, 2, 3];
$sum = array_sum($arr);
echo (sizeof($arr) == 3) ? "{$sum}<br>" : "No" ;

//19(11) cycles

for ($i = 1; $i <= 20; $i++)
{
    for ($j = 1; $j <= $i; $j++)
        echo "x";
    echo "<br>";
}

//20(12) combination of functions

$array = [1,2,3,4,5,6,7,8,9];
echo array_sum($array)/sizeof($array)."<br>";

echo array_sum(range(1, 100))."<br>";

$arr4 = [4,69,144,25];
print_r(array_map('sqrt', $arr4));

$keys = range('a', 'z');
$vals = range(1,26);
$arr3= array_combine($keys, $vals);
echo "<br>";
print_r($arr3);
echo "<br>";

$numbers = '1234567890';
$arr4 = str_split($numbers, 2);
$res = array_sum($arr4);
echo $res;