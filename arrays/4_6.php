<?php
//Требуется изменить размер массива — увеличить или уменьшить его по сравнению с текущим размером.


$array = array('apple', 'banana', 'coconut');
$extendedArray = array_pad($array, -6, '***');
var_dump($extendedArray);