<?php
//Требуется определить, содержит ли массив некоторое значение
if(in_array('a', ["a", 1, 2, 3])){
   echo "yes";
}
$array = ['asdd', 'ffff', 'gggg'];
$flipped = array_flip($array );
var_dump($flipped);
if(array_key_exists('asdd', $flipped)){
    echo array_key_exists('asdd', $flipped);
}