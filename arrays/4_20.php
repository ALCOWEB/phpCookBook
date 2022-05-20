<?php
//Требуется переставить элементы массива в случайном порядке.

$array1 = ['some var', 'another var', 'last var'];
$array2 = ['look var', 'what var', 'its a var'];
shuffle($array2);
var_dump($array2);