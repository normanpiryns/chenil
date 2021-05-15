<?php

class VaccineController extends AbstractController {
    public function __construct()
    {
        $this->dao = new VaccineDao();
    }

    public function showAll () {
        $vaccines = $this->dao->getVaccines();
        include ('../views/vaccines/list.php');
    }

    public function create_form () {
        include ('../views/vaccines/create_form.php');
    }

    /**
     * Appelle la méthode du Dao permettant l'enregistrement d'un vaccin dans la DB
     * @param $id
     * @param $data
     */
    public function create ($id, $data) {
        $this->dao->addVaccine($data);
        $this->showAll();
    }

    public function show ($id) {
        $vaccine = $this->dao->getVaccineById($id);
        include ('../views/vaccines/one.php');
    }

    public function update($id, $data) {
        $this->dao->updateVaccine($id, $data);
        $this->showAll();
    }

    public function delete ($id) {
        $this->dao->deleteVaccine($id);
        $this->showAll();
    }

}