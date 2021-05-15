<?php

class RaceController extends AbstractController {
    public function __construct()
    {
        $this->dao = new RaceDao();
    }

    public function showAll () {
        $races = $this->dao->getRaces();
        include ('../views/races/list.php');
    }

    public function create_form () {
        include ('../views/races/create_form.php');
    }


    public function show ($id) {
        $race = $this->dao->getRaceById($id);
        include ('../views/races/one.php');
    }

    public function update($id, $data) {
        var_dump("ON EST DANS LA RACE");
        var_dump($id);
        var_dump($data);
        $this->dao->updateRace($id, $data);
    }

    public function delete ($id) {
        $this->dao->deleteRace($id);
        $races = $this->dao->getRaces();
        include ('../views/races/list.php');
    }

}