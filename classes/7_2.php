<?php
// 

class User
{
    public $username;
    public function __construct($username)
    {
        $this->username = $username;
    }
}

$user = new User('pavel');
var_dump($user);