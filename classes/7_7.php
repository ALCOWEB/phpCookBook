<?php
//Задача Некоторые методы должны использоваться разными классами, но при этом наследование всех классов от одного родительского класса выглядит нелогично.

interface SomeInterface
{
    public function getName();
    public function setName($name);
}


class User implements SomeInterface
{
  public function getName(){
      return $this->name;
  }

  public function setName($name){
    $this->name = $name;
}
}

$reflect = new ReflectionClass('User');

print_r($reflect->getInterfaceNames());