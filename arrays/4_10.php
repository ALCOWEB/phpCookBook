<?php
//Требуется проверить, содержит ли массив заданный ключ.
$array =[];
if(array_key_exists('a', $array)){
    echo 'yes';
} else {
    echo "no";
}