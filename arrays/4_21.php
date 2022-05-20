<?php
//Требуется исключить из массива дубликаты (повторяющиеся значения).

$array = ['one', 'two', 'two', 'three'];
$unique = array_unique($array);
var_dump($unique);

