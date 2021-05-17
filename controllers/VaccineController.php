<?php

class VaccineController extends AbstractController {
    public function __construct()
    {
        $this->dao = new VaccineDao();
    }

    public function index () {
        $vaccines = $this->dao->getVaccines();

        include ('../views/header.php');
        include ('../views/vaccines/list.php');
        include ('../views/footer.php');
    }

    public function create_form () {
        include ('../views/header.php');
        include ('../views/vaccines/create_form.php');
        include ('../views/footer.php');
    }

    /**
     * Appelle la méthode du Dao permettant l'enregistrement d'un nouveau vaccin dans la DB
     * @param $id
     * @param $data
     */
    public function create ($id, $data) {
        $this->dao->addVaccine($data);
        $this->index();
    }

    public function addVaccineToAnimal($id, $data) {
        $this->dao->addVaccineToAnimal($data);
        // redirection à l'animal
        $animalController = new AnimalController();
        $animalController->show($data['fk_animal']);
    }

    public function show ($id) {
        $vaccine = $this->dao->getVaccineById($id);

        include ('../views/header.php');
        include ('../views/vaccines/one.php');
        include ('../views/footer.php');
    }

    public function update($id, $data) {
        $this->dao->updateVaccine($id, $data);
        $this->index();
    }

    public function delete ($id) {
        $this->dao->deleteVaccine($id);
        $this->index();
    }

}