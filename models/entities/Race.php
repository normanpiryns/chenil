<?php

class Race
{
    private $id;
    private $name;
    private $specie;

    public function __construct($id, $name, $specie = false)
    {
        $this->id = $id;
        $this->name = $name;
        $this->specie = $specie;
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