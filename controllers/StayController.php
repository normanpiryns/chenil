<?php

class StayController extends AbstractController {
    public function __construct() {
        $this->dao = new StayDao();
    }

    public function index () {
        $stays = $this->dao->getStays();

        include ('../views/header.php');
        include ('../views/stays/list.php');
        include ('../views/footer.php');
    }

    // Save stays
    public function store ($id, $data) {
        $is_stored_in_db = $this->dao->store($data);
        if($is_stored_in_db) {
            $stays = $this->dao->fetchAll();
            include ('../views/header.php');
            include ('../views/stays/list.php');
            include ('../views/footer.php');
        } else {
            echo "Error";
            return http_response_code(401);
        }
    }

    public function delete ($id) {
        $this->dao->deleteStay($id);
        $stays = $this->dao->getStays();
        include ('../views/header.php');
        header('Location: /animals/show/'.$data["fk_animal"]);
        include ('../views/footer.php');
    }

    public function show ($id) {
        $stay = $this->dao->getStayById($id);
        include ('../views/stays/one.php');
    }

    public function edit ($id) {
        $person = $this->dao->getStayById($id);
        include('../views/species/form.php');
    }

    
    public function create_form ($id) {
        $animalDao = new AnimalDao();
        $animals = $animalDao->getAnimals();
        
        include ('../views/header.php');
        include ('../views/stays/create_form.php');
        include ('../views/footer.php');
    }

    public function create ($id, $data) {
        
        $this->dao->store($data);
        header('Location: /animals/show/'.$data["fk_animal"]);
    }

}