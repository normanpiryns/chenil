<?php

abstract class AbstractDao {
    protected $connection;
    protected $table;

    public function __construct($table) {
        $this->table = $table;
        $this->connection = new PDO('mysql:host=localhost;dbname=chenil', 'root', '');
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}