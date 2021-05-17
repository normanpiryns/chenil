<?php

class Animal
{
    private $id;
    private $name;
    private $chip;
    private $sex;
    private $sterilized;
    private $birthDate;
    private $person;
    private $race;
    private $stays;
    private $vaccines;

    public function __construct($id, $name, $chip, $sex, $sterilized, $birthDate, $person = false, $race = false, $stays = false, $vaccines = false)
    {
        $this->id = $id;
        $this->name = $name;
        $this->chip = $chip;
        $this->sex = $sex;
        $this->sterilized = $sterilized;
        $this->birthDate = $birthDate;
        $this->person = $person;
        $this->race = $race;
        $this->stays = $stays;
        $this->vaccines = $vaccines;
    }

    public function __get($prop)
    {
        if (property_exists($this, $prop)) {
            return $this->$prop;
        }
    }

    public function __set($prop, $value)
    {
        if (property_exists($this, $prop)) {
            $this->$prop = $value;
        }
    }
}