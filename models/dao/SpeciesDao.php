<?php

class SpeciesDao extends AbstractDao
{

    public function __construct()
    {
        // call parent constructor (AbstractDAO)
        parent::__construct('species');
    }

    // fetch all species
    public function getSpecies()
    {
        try {
            $statement = $this->connection->prepare("SELECT * FROM {$this->table}");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $this->createAll($result);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function getSpeciesById($id)
    {
        try {
            $statement = $this->connection->prepare("SELECT * FROM {$this->table} WHERE id = ?");
            $statement->execute([
                $id
            ]);
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            return $this->create($result);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    // create species
    public function store($species)
    {
        if (empty($data['name'])) {

            return false;
        }

        $animal = $this->create(
            [
                'id' => 0,
                'name' => $data['name']
            ]
        );

        if ($species) {
            try {
                $statement = $this->connection->prepare(
                    "INSERT INTO {$this->table} (name) VALUES (?)"
                );
                $statement->execute([
                    htmlspecialchars($species->__get('name'))
                ]);
                return true;
            } catch (PDOException $e) {
                print $e->getMessage();
                return false;
            }
        }
    }

    public function updateSpecies($species)
    {
        if (empty($data['id'])) {
            return false;
        }

        try {
            $statement = $this->connection->prepare(
                "UPDATE {$this->table} SET name = ? WHERE id = ?");
            $statement->execute([
                htmlspecialchars($data['name'])
            ]);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function deleteSpecies($id)
    {
        if (empty($data['id'])) {
            return false;
        }

        try {
            $statement = $this->connection->prepare("DELETE FROM {$this->table} WHERE id = ?");
            $statement->execute([
                $data['id']
            ]);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    // Instantiate a list of species
    function createAll($results)
    {
        $productList = array();
        foreach ($results as $result) {
            array_push($productList, $this->create($result));
        }
        return $productList;
    }

    //Instantiate a species
    function create($result)
    {
        return new Species(
            $result['id'],
            $result['name']
        );
    }

}