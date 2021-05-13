<?php

class RaceController extends AbstractController {
    public function __construct()
    {
        $this->dao = new RaceDao();
    }
}