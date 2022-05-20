<?php
// Требуется отсортировать несколько массивов или многомерный массив.
// array_multisort()

$array1 = ['some var', 'another var', 'last var'];
$array2 = ['look var', 'what var', 'its a var'];
//array_multisort($array1, SORT_NUMERIC, $array2);
$multiarray = ['colors' => ['white', 'black', 'red'], 'cityes' =>['mscow', 'cheboksary', 'tripoli']];
array_multisort($multiarray['colors'], SORT_STRING, $multiarray['cityes'], SORT_NUMERIC);
var_dump($multiarray);