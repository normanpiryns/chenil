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

    public function create ($id, $data) {
        $this->dao->store($data);
        $this->index();
    }

    public function delete ($id) {
        
        $this->dao->deletePerson($id);
        $person = $this->dao->getPersons();
        $this->index();
    }

    public function update($id, $data) {
        $this->dao->updatePerson($id, $data);
        $this->index();
    }

    public function show ($id) {
        $person = $this->dao->getPersonById($id);
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