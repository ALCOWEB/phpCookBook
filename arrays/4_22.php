<?php
//
$names = ['firstname' => "Baba",'lastname' => "O'Riley"];
array_walk($names, function(&$val, &$key){
   $val = htmlentities($val, ENT_QUOTES);   
   $val .= $key;
});
var_dump($names);