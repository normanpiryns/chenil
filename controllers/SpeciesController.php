<?php

class SpeciesController extends AbstractController {
    public function __construct() {
        $this->dao = new SpeciesDao();
    }

    public function index () {
        $species = $this->dao->getSpecies();

        include ('../views/header.php');
        include ('../views/species/list.php');
        include ('../views/footer.php');
    }

    // Save species
    public function store ($id, $data) {
        $is_stored_in_db = $this->dao->store($data);
        if($is_stored_in_db) {
            $species = $this->dao->fetchAll();
            include ('../views/header.php');
            include ('../views/species/list.php');
            include ('../views/footer.php');
        } else {
            echo "Error";
            return http_response_code(401);
        }
    }

    public function update($id, $data) {
        $this->dao->updateSpecies($id, $data);
        $this->index();
    }

    public function delete ($id) {
        $this->dao->deleteSpecies($id);
        $species = $this->dao->getSpecies();
        include ('../views/header.php');
        include ('../views/species/list.php');
        include ('../views/footer.php');
    }

    public function show ($id) {
        $species = $this->dao->getSpeciesById($id);
        include ('../views/header.php');
        include ('../views/species/one.php');
        include ('../views/footer.php');
    }

    public function edit ($id) {
        $species = $this->dao->getSpeciesById($id);
        include ('../views/header.php');
        include('../views/species/form.php');
        include ('../views/footer.php');
    }

    public function create_form () {
        include ('../views/header.php');
        include ('../views/species/create_form.php');
        include ('../views/footer.php');
    }

    public function create ($id, $data) {
        $this->dao->store($data);
        $this->index();
    }
}