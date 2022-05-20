<?php
//Требуется вызывать разные функции в зависимости от значения переменной.
function getfile($file){return file_get_contents($file);}
$fname = "getfile";
$file = '../test.csv';
//echo call_user_func($fname, $file);

function multiargs(){
    $args = func_get_args();
    call_user_func_array('funcname', $args);
}

$dispatch = [
    'add' => 'do_add',
    'commit' => 'do_commit',
    'checkout' => 'do_checkout',
    'update' => 'do_update'
];
function comand($comand, $dispatch){
    if(array_key_exists($comand, $_REQUEST[$comand])){
        call_user_func($dispatch[$comand]);

    } else {
        echo "uknown comand";
    }
}
