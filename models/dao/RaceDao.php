<?php

class RaceDao extends AbstractDao {

    public function __construct()
    {
        //appelle le constructeur du parent (AbstractDAO)
        parent::__construct('races');
    }

}