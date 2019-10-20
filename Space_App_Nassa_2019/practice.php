<?php
class Employee extends Person {
    const COMPANY_NAME = 'ACME';
    static $employeenumber = 100;
    private $jobtitle;
    public static function getemployeenumber(){
        return self::$employeenumber;
    }
    public function __construct($jobtitle,$firstname,$lastname,$gender = 'm'){

        $this->jobtitle = $jobtitle;
        parent:: __construct($firstname,$lastname,$gender);
        parent:: EYE_COLOUR;
    }
    public function __get($name){
        return $this->$name;
    }
    public function __set($name,$value){
        $this->$name = $value;
    }
}
class Person{
    const EYE_COLOUR ='brown';
     public $firstname;
    public $lastname;
    public $gender;
 public function  __construct($firstname,$lastname,$gender = 'm'){
     $this->firstname = $firstname;
     $this->lastname = $lastname;
     $this->gender = $gender;
 }
    public function sayHello(){
        return "Hello my name is ".$this->firstname." ".$this->lastname;
    }
}

echo Employee::getemployeenumber();



?>