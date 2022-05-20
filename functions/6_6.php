<?php
//Требуется определить функцию, которая может получать переменное количество аргументов.
function manyArgs(){
    return func_get_args();
}

var_dump(manyArgs(21,34,11,22,33,44));