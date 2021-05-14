<?php

class Animal {
    private $id;
    private $name;
    private $chip;
    private $sex;
    private $sterilized;
    private $birthDate;

    public function __construct ($id, $name) {
        $this->id = $id;
        $this->name = $name;
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