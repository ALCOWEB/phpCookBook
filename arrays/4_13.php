<?php
//Требуется найти в массиве элементы, удовлетворяющие некоторому условию.
$movies = ['alfa', 'betta', 'gamma'];
$flops = array_filter($movies, function($arr){if($arr == 'betta' or $arr == 'gamma'){ return true;}});
var_dump($flops);