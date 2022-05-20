<?php
// Требуется управлять представлением объекта при его выводе из PHP.
class Person
{
 public $name;
 public function __toString()
 {
     return $this->name;
 }


}

$peres = new Person;
$peres->name = 'petya';
echo $peres;