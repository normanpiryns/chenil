<?php

class AnimalController extends AbstractController {
    public function __construct() {
        $this->dao = new AnimalDao();
    }

    public function index () {
        $animals = $this->dao->getAnimals();

        include ('../views/header.php');
        include ('../views/animals/list.php');
        include ('../views/animals/search.php');
        include ('../views/footer.php');
    }

    // Save animal
    public function store ($id, $data) {
        $is_stored_in_db = $this->dao->store($data);
        if($is_stored_in_db) {
            $animals = $this->dao->fetchAll();
            include ('../views/animals/list.php');
        } else {
            echo "Error";
            return http_response_code(401);
        }
    }

    public function delete ($id, $data) {
        $this->dao->deleteAnimal($data);
        $animal = $this->dao->getAnimals();
        include ('../views/animals/list.php');
    }

    public function show ($id) {
        $animal = $this->dao->fetch($id);
        include ('../views/animals/one.php');
    }

    public function edit ($id) {
        $animal = $this->dao->getAnimalById($id);

        // races
        $raceDao = new RaceDao();
        $races = $raceDao->getRaces();
        // vaccines
        $vaccineDao = new VaccineDao();
        $vaccines = $vaccineDao->getVaccines();
        include('../views/animals/form.php');
    }

}