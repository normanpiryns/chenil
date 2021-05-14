<?php

class Person {
    private $id;
    private $firstName;
    private $lastName;
    private $birthDate;
    private $email;
    private $telephone;

    public function __construct ($id, $firstName, $lastName, $birthDate, $email, $telephone) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->email = $email;
        $this->telephone = $telephone;
        
    }

    public function __get ($prop) {
        if (property_exists($this, $prop)) {
            return $this->$prop;
        }
    }

    public function __set ($prop, $value) {
        if(property_exists($this, $prop)) {
            $this->$prop = $value;
        }
    }
}