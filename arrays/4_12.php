<?php
// Требуется узнать, присутствует ли значение в массиве. Если значение присутствует в массиве, требуется узнать его ключ.

$array = ['sddd','dddd', '1'];
var_dump(array_search(1, $array, true));