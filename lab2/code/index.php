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


