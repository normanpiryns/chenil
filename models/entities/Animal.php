<?php

class Animal {
    private $id;
    private $name;
    private $race;
    private $sex;
    private $isSterilised;
    private $birthDate;
    private $puceId;

    public function __construct ($id, $name, $race, $sex, $isSterilised, $birthDate, $puceId) {
        $this->id = $id;
        $this->name = $name;
        $this->race = $race;
        $this->sex = $sex;
        $this->isSterilised = $isSterilised;
        $this->birthDate = $birthDate;
        $this->puceId = $puceId;
    }

}