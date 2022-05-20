<?php
//Требуется вернуть значение по ссылке, а не по значению. Тем самым предотвращается создание лишнего дубликата переменной.
function &linkVar($needle, &$array){
    if(($key = array_search($needle, $array)) !== false){
        return $array[$key];
    }
}

$array = [
    'name' => 'petr',
    'last_name' => 'ivanov'
];

$petr =& linkVar('petr', $array  );
$petr = 'nepetr';
var_dump($array);