<?php

class RaceDao extends AbstractDao
{

    public function __construct()
    {
        // call parent constructor (AbstractDAO)
        parent::__construct('races');
    }

    public function getRaces()
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

    public function getRaceById($id)
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

    public function addRace($data)
    {
        if (empty($data['name']) || empty($data['fk_species'])) {
            return false;
        }

        $race = $this->create(
            [
                'id' => 0,
                'name' => $data['name'],
                'fk_species' => $data['fk_species'],
            ]
        );

        if ($race) {
            try {
                $statement = $this->connection->prepare(
                    "INSERT INTO {$this->table} (name, fk_species) VALUES (?, ?)"
                );
                $statement->execute([
                    htmlspecialchars($race->__get('name')),
                    htmlspecialchars($race->__get('specie')->id),
                ]);
                return true;
            } catch (PDOException $e) {
                print $e->getMessage();
                return false;
            }
        }
    }

    public function updateRace($id, $data)
    {
        // todo pouvoir changer l'espèce'
        if (empty($id)) {
            return false;
        }

        try {
            $statement = $this->connection->prepare(
                "UPDATE {$this->table} SET name = ? WHERE id = ?");
            $statement->execute([
                htmlspecialchars($data['name']),
                htmlspecialchars($id)
            ]);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function deleteRace($id)
    {
        if (empty($id)) {
            return false;
        }

        try {
            $statement = $this->connection->prepare("DELETE FROM {$this->table} WHERE id = ?");
            $statement->execute([
                $id
            ]);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    function create($result)
    {
        $specie = new Species($result['fk_species'], null);

        return new Race(
            $result['id'],
            $result['name'],
            $specie
        );
    }

    // Instantiate a list of animals
    function createAll($results)
    {
        $productList = array();
        foreach ($results as $result) {
            array_push($productList, $this->create($result));
        }
        return $productList;
    }

}