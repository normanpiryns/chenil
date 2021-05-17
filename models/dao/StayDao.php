<?php

class StayDao extends AbstractDao
{

    public function __construct()
    {
        // call parent constructor (AbstractDAO)
        parent::__construct('stays');
    }

    // fetch all stays
    public function getStays()
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

    public function getStayById($id)
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

    function getStaysByAnimalId($id){
        try {
            $statement = $this->connection->prepare("SELECT * FROM {$this->table} WHERE fk_animal = ?" );
            $statement->execute([
                $id
            ]);
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $this->createAll($result);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    // create stay
    public function store($data)
    {
        
        if (empty($data['dateBegin']) || empty($data['dateEnd']) || empty($data['fk_animal'])) {
            
            return false;
        }

        $stay = $this->create(
            [
                'id' => 0,
                'dateBegin' => $data['dateBegin'],
                'dateEnd' => $data['dateEnd'],
                'fk_animal' => $data['fk_animal']
            ]
        );

        if ($stay) {
            try {
                $statement = $this->connection->prepare(
                    "INSERT INTO {$this->table} (dateBegin, dateEnd, fk_animal) VALUES (?, ?, ?)"
                );
                $statement->execute([
                    htmlspecialchars($stay->__get('dateBegin')),
                    htmlspecialchars($stay->__get('dateEnd')),
                    htmlspecialchars($stay->__get('fk_animal'))
                    
                ]);
                return true;
            } catch (PDOException $e) {
                print $e->getMessage();
                return false;
            }
        }
    }

    public function updateStay($data)
    {
        if (empty($data['id'])) {
            return false;
        }

        try {
            $statement = $this->connection->prepare(
                "UPDATE {$this->table} SET dateBegin = ?, dateEnd = ? WHERE id = ?");
            $statement->execute([
                htmlspecialchars($data['dateBegin']),
                htmlspecialchars($data['dateEnd']),
                htmlspecialchars($data['id'])
            ]);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function deleteStay($id)
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

    // Instantiate a list of stay
    function createAll($results)
    {
        $productList = array();
        foreach ($results as $result) {
            array_push($productList, $this->create($result));
        }
        return $productList;
    }

    

    //Instantiate a stay
    function create($result)
    {
        return new Stay(
            $result['id'],
            $result['dateBegin'],
            $result['dateEnd'],
            $result['fk_animal']
        );
    }

}