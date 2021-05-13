<?php

class AnimalController extends AbstractController {
    public function __construct() {
        $this->dao = new AnimalDao();
    }
}