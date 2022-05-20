<?php
// Асбтрактные классы
abstract class DataBase
{
  abstract  public function connect($server, $name, $password, $db );
   abstract public function query($sql);
   abstract public function fetch();
   abstract public function close();
}

class Mysql extends DataBase
{
    protected $dbh;
    protected $query;


   public function connect($server, $name, $password, $db ){
       $this->dbh = new PDO("mysql:host=$server;dbname=$db",$name, $password);
   }
     public function query($sql){
         $this->query = $this->dbh->query($sql);
     }
     public function fetch(){
        return $this->query->fetch();
     }  
     public function close(){
        $this->dbh->close();
     }
}