<?php

class VaccineController extends AbstractController {
    public function __construct()
    {
        $this->dao = new VaccineDao();
    }

    public function showAll () {
        $races = $this->dao->getVaccines();
        include ('../views/vaccines/list.php');
    }

    public function create_form () {
        include ('../views/vaccines/create_form.php');
    }


    public function show ($id) {
        $race = $this->dao->getRaceById($id);
        include ('../views/vaccines/one.php');
    }

    public function update($id, $data) {
        var_dump("ON EST DANS LA RACE");
        var_dump($id);
        var_dump($data);
        $this->dao->updateVaccine($id, $data);
    }

    public function delete ($id) {
        $this->dao->deleteVaccine($id);
        $vaccines = $this->dao->getVaccines();
        include ('../views/vaccines/list.php');
    }

}