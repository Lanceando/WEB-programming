<?php
echo 'Ex1' . "\n";
echo 'a)' . "\n";
$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a..b/', $str, $matches);
print_r($matches[0]);


echo 'b)' . "\n";
$str = 'a1b2c3';
$str = preg_replace_callback('/\d/', function($matches) {
    return pow($matches[0], 3);
}, $str);
echo $str;