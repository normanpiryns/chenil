<?php

class VaccineController extends AbstractController {
    public function __construct()
    {
        $this->dao = new VaccineDao();
    }
}