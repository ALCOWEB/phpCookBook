<?php
//Требуется выполнить фрагмент кода для каждого целого числа из диапазона.

$number = range(2,10);
var_dump($number);
foreach($number as $val){
    echo $val*$val.PHP_EOL;
}