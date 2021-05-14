<?php

class Stay {
    private $id;
    private $dateBegin;
    private $dateEnd;
    private $fk_animal;


    public function __construct ($id, $dateBegin, $dateEnd, $fk_animal) {
        $this->id = $id;
        $this->dateBegin = $dateBegin;
        $this->dateEnd = $dateEnd;
        $this->fk_animal = $fk_animal;
        
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