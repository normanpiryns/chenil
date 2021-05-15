<?php

class PersonController extends AbstractController {
    public function __construct() {
        $this->dao = new PersonDao();
    }

    public function index () {
        $persons = $this->dao->getPersons();

        include ('../views/header.php');
        include ('../views/persons/list.php');
        include ('../views/footer.php');
    }

    // Save person
    public function store ($id, $data) {
        $is_stored_in_db = $this->dao->store($data);
        if($is_stored_in_db) {
            $animals = $this->dao->fetchAll();
            include ('../views/persons/list.php');
        } else {
            echo "Error";
            return http_response_code(401);
        }
    }

    public function delete ($id) {
        $this->dao->deletePerson($id);
        $person = $this->dao->getPerson();
        include ('../views/persons/list.php');
    }

    public function show ($id) {
        $person = $this->dao->fetch($id);
        include ('../views/persons/one.php');
    }

    public function edit ($id) {
        $person = $this->dao->getPersonById($id);
        include('../views/persons/form.php');
    }

    public function create_form () {
        include ('../views/persons/create_form.php');
    }
}