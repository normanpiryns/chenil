<?php

class AnimalController extends AbstractController {
    public function __construct() {
        $this->dao = new AnimalDao();
    }

    public function index () {
        $animals = $this->dao->getAnimals();

        include ('../views/header.php');
        include ('../views/animals/list.php');
        include ('../views/footer.php');
    }

    /**
     * Affiche un animal en fonction de son identifiant
     * @param $id
     */
    public function show ($id) {
        $animal = $this->dao->getAnimalByIdFullData($id);
        include ('../views/header.php');
        include ('../views/animals/one.php');
        include ('../views/footer.php');
    }

    /**
     * Appelle la méthode du Dao permettant l'enregistrement de l'animal dans la DB
     * @param $id
     * @param $data
     */
    public function create ($id, $data) {
        $this->dao->store($data);
        $this->index();
    }

    /**
     * affiche le formulaire d'ajout d'un animal
     */
    public function create_form () {
        $raceDao = new RaceDao();
        $races = $raceDao->getRaces();
        include ('../views/animals/create_form.php');
    }

    /**
     * Appelle la méthode Dao permettant la mise à jour d'un animal
     * @param $id
     * @param $data
     */
    public function update($id, $data) {
        $this->dao->updateAnimal($id, $data);
        $this->index();
    }

    /**
     * Supprime un animal en fonction de son identifiant
     * @param $id
     */
    public function delete ($id) {
        $this->dao->deleteAnimal($id);
        $this->index();
    }

}