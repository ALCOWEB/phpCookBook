<?php
//
$a = array('To', 'be', 'or', 'not', 'to', 'be');
$b = array('To', 'be', 'or', 'whatever');
//var_dump(array_merge($a, $b));
$union = array_unique(array_merge($a, $b));
//var_dump($union);
//Вычисление пересечения:
$intersection = array_intersect($a, $b);
var_dump($intersection);
//Вычисление простой разности:
$difference = array_diff($a, $b);
var_dump($difference);
//Вычисление симметричной разности:
$difference = array_merge(array_diff($a, $b), array_diff($b, $a));
var_dump($difference);