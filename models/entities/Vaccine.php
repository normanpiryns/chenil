<?php

class Vaccine {
    private $id;
    private $name;
    private $description;

    public function __construct ($id, $name, $description) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

}