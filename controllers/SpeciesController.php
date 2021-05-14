<?php

class SpeciesController extends AbstractController {
    public function __construct() {
        $this->dao = new SpeciesDao();
    }

    public function index () {
        $species = $this->dao->getSpecies();

        include ('../views/header.php');
        include ('../views/species/list.php');
        include ('../views/species/search.php');
        include ('../views/footer.php');
    }

    // Save species
    public function store ($id, $data) {
        $is_stored_in_db = $this->dao->store($data);
        if($is_stored_in_db) {
            $species = $this->dao->fetchAll();
            include ('../views/species/list.php');
        } else {
            echo "Error";
            return http_response_code(401);
        }
    }

    public function delete ($id, $data) {
        $this->dao->deleteSpecies($data);
        $species = $this->dao->getSpecies();
        include ('../views/species/list.php');
    }

    public function show ($id) {
        $species = $this->dao->fetch($id);
        include ('../views/species/one.php');
    }

    public function edit ($id) {
        $species = $this->dao->getSpeciesById($id);
        include('../views/species/form.php');
    }

}