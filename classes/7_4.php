<?php
//  Требуется ограничить доступ к некоторым методам и свойствам, чтобы они были доступны только в классах, связанных определенными отношениями с классом объекта.

use User as GlobalUser;

class User{
    public $username;
    protected $email;
    private $pasword;

    public function __construct($username, $email, $pasword)
    {
         $this->username = $username;
         $this->email = $email;
         $this->pasword  = $pasword;
    }

    public function getUserInfo( ){
        //return $this->getEmail();
        return $this->getPasword();
        
    }

    protected function getEmail()
    {
        return $this->email;
    }

    private function getPasword()
    {
        return $this->pasword;
    }
}



class Customer extends User
{
   
}
$user = new User('petya', 'petya@mail.ru', "asdasd");
$customer = new Customer('sasha', 'sasha@mail.ru', "qqqqq");
echo $user->getUserInfo().PHP_EOL;
echo $customer->getUserInfo().PHP_EOL;
var_dump($customer);