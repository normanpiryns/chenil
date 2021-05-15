<?php

class RaceController extends AbstractController {
    public function __construct()
    {
        $this->dao = new RaceDao();
    }

    public function showAll () {
        $races = $this->dao->getRaces();
        include ('../views/races/list.php');
    }

    public function create_form () {
        $specieDao = new SpeciesDao();
        $species = $specieDao->getSpecies();
        include ('../views/races/create_form.php');
    }

    /**
     * Appelle la méthode du Dao permettant l'enregistrement d'une race dans la DB
     * @param $id
     * @param $data
     */
    public function create ($id, $data) {
        $this->dao->addRace($data);
        $this->showAll();
    }

    public function show ($id) {
        $race = $this->dao->getRaceById($id);
        include ('../views/races/one.php');
    }

    public function update($id, $data) {
        $this->dao->updateRace($id, $data);
        $this->showAll();
    }

    public function delete ($id) {
        $this->dao->deleteRace($id);
        $this->showAll();
    }

}