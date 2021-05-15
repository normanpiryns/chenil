<?php

class VaccineDao extends AbstractDao {

    public function __construct()
    {
        // call parent constructor (AbstractDAO)
        parent::__construct('vaccines');
    }

    public function getVaccines()
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

    public function getVaccineById($id)
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

    public function addVaccine($data)
    {
        if(empty($data['name']) || empty($data['description'])) {
            return false;
        }

        $vaccine = $this->create(
            [
                'id'=> 0,
                'name'=> $data['name'],
                'description' => $data['description']
            ]
        );

        if ($vaccine) {
            try {
                $statement = $this->connection->prepare(
                    "INSERT INTO {$this->table} (name, description) VALUES (?, ?)"
                );
                $statement->execute([
                    htmlspecialchars($vaccine->__get('name')),
                    htmlspecialchars($vaccine->__get('description'))
                ]);
                return true;
            } catch(PDOException $e) {
                print $e->getMessage();
                return false;
            }
        }
    }

    public function updateVaccine($id, $data)
    {
        if (empty($id)) {
            return false;
        }

        try {
            $statement = $this->connection->prepare(
                "UPDATE {$this->table} SET name = ?, description = ? WHERE id = ?");
            $statement->execute([
                htmlspecialchars($data['name']),
                htmlspecialchars($data['description']),
                htmlspecialchars($id)
            ]);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function deleteVaccine($id)
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
        return new Vaccine(
            $result['id'],
            $result['name'],
            $result['description']
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