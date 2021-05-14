<?php

class Animal {
    private $id;
    private $name;
    private $race;
    private $sex;
    private $sterilised;
    private $birthDate;
    private $puceId;

    public function __construct ($id, $name, $race) {
        $this->id = $id;
        $this->name = $name;
        $this->race = $race;
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