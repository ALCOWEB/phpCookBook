<?php 

//Требуется сгенерировать случайную строку.

function str_rand($lenght = 32, $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'){
    if($lenght < 0 || !is_int($lenght)){
        return false;
    }

    $charset_lenght = strlen($char) -1;
    $string = '';
    for ($i = $lenght; $i>0; $i--){
        $string .= $char[mt_rand(0, $charset_lenght)];
    }

    return $string;
}

echo str_rand(12);