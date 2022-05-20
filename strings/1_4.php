<?php

//Требуется последовательно обработать каждый байт в строке.

$string = "This weekend, I'm going shopping for a pet chicken.";
$v = 0;
for ($i=0; $i<strlen($string); $i++){
    if (strstr('aeiouAEIOU',$string[$i])) {
        $vowels++;
        }
}

