<?php

// 1. Доступн по ссылке

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order =&  $very_bad_unclear_name;
$order .= " and two number 9s, a number 9 large, a number 6 with extra dip, a number 7, two number 45s, one with cheese, and a large soda.";



// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

// 2. Числа

$num = 5;
echo "\n$num";
echo "\n";

$numfloat = 3.332;
echo "$numfloat";
echo "\n";

echo 36/3;
echo "\n";

$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month;
echo "\n";

// 11. Умножение и деление

$num_languages = 4;
$months = 11;

$days = 16 * $months;

$days_per_language = $days / $num_languages;

echo $days_per_language;
echo "\n";

// 12. Степень

echo 8 ** 2;
echo "\n";

// 13. Операторы присвоения

$my_num = 24;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
echo "\n";

// 14. Математические функции
// 1) Работа с %
$a = 10;
$b = 3;
$res = $a % $b;
echo $res;
echo "\n";

if ($a % $b == 0){
    echo "Делится, $res";
}
else {
    echo "Делится с остатком, $res";
}
echo "\n";

// 2) Работа со степенью и корнем

$st = pow(2,10);
echo "$st\n";
$st1 = sqrt(245);
echo "$st1\n";
$arr = [4, 2, 5, 19, 13, 0, 10];

$sumArr = 0;
foreach ($arr as $num) $sumArr += pow($num,2);
$sqrtArr = sqrt($sumArr);
echo "$sqrtArr\n";

// 3)Работа с функциями округления
$sqrt1 = sqrt(379);
echo round($sqrt1, 0) . "\n";
echo round($sqrt1, 1) . "\n";
echo round($sqrt1, 2) . "\n";

$sqrt2 = sqrt(587);

$resArray = [
    'floor' => floor($sqrt2),
    'ceil' => ceil($sqrt2),
];
echo $resArray['floor'] . " " . $resArray['ceil'] . "\n";

// 4) Работа с min и max

$arr = [4, -2, 5, 19, -130, 0, 10];
$minArr = min($arr);
$maxArr = max($arr);
echo "max: ". $maxArr . " min: ".  $minArr . "\n";

// 5) работа с рандомом

echo rand(1,100) . "\n";

for ($i = 0; $i < 10; $i++) {
    $arr[$i] = rand();
}
for ($i = 0; $i < 10; $i++) {
    echo $arr[$i] . "\n";
}

// 6) Работа с модулем

$a = 5;
$b = 10;
echo abs($a - $b). "\n";

$arr = [1, 2, -1, -2, 3, -3];
$arrAbs = [];

for($i = 0; $i < count($arr); $i++){
    $arrAbs[$i] = abs($arr[$i]);
}
/*
for ($i = 0; $i < count($arr); $i++) {
    echo $arrAbs[$i] . "\n";
}
*/



