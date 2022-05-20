<?php 
//

class test
{

    public $var;
}

$var = new test;
$var->var = 4;

function testfunc($var){
    $var->var = 10;
}

testfunc($var);

echo $var->var;