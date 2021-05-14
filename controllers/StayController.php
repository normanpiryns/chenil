<?php

class StayController extends AbstractController {
    public function __construct() {
        $this->dao = new StayDao();
    }

    public function index () {
        $stay = $this->dao->getStay();

        include ('../views/header.php');
        include ('../views/stays/list.php');
        include ('../views/stays/search.php');
        include ('../views/footer.php');
    }

    // Save stays
    public function store ($id, $data) {
        $is_stored_in_db = $this->dao->store($data);
        if($is_stored_in_db) {
            $stays = $this->dao->fetchAll();
            include ('../views/stays/list.php');
        } else {
            echo "Error";
            return http_response_code(401);
        }
    }

    public function delete ($id, $data) {
        $this->dao->deleteStays($data);
        $species = $this->dao->getStays();
        include ('../views/stays/list.php');
    }

    public function show ($id) {
        $stays = $this->dao->fetch($id);
        include ('../views/stays/one.php');
    }

    public function edit ($id) {
        $person = $this->dao->getStayById($id);
        include('../views/species/form.php');
    }

}