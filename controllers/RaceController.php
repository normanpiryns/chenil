<?php

class RaceController extends AbstractController {
    public function __construct()
    {
        $this->dao = new RaceDao();
    }

    public function index () {
        $races = $this->dao->getRaces();

        include ('../views/header.php');
        include ('../views/races/list.php');
        include ('../views/footer.php');
    }

    public function create_form () {
        $specieDao = new SpeciesDao();
        $species = $specieDao->getSpecies();

        include ('../views/header.php');
        include ('../views/races/create_form.php');
        include ('../views/footer.php');
    }

    /**
     * Appelle la méthode du Dao permettant l'enregistrement d'une race dans la DB
     * @param $id
     * @param $data
     */
    public function create ($id, $data) {
        $this->dao->addRace($data);
        $this->index();
    }

    public function show ($id) {
        $race = $this->dao->getRaceById($id);
        include ('../views/header.php');
        include ('../views/races/one.php');
        include ('../views/footer.php');
    }

    public function update($id, $data) {
        $this->dao->updateRace($id, $data);
        $this->index();
    }

    public function delete ($id) {
        $this->dao->deleteRace($id);
        $this->index();
    }

}