<?php
// Требуется отсортировать массив конкретным способом.

$states = ['Delaware', 5 => 'Pennsylvania', 'New Jersey'];
//sort($states, SORT_NUMERIC);
asort($states);
var_dump($states);