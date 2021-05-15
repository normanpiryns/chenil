<?php

class PersonDao extends AbstractDao
{

    public function __construct()
    {
        // call parent constructor (AbstractDAO)
        parent::__construct('persons');
    }

    // fetch all persons
    public function getPersons()
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

    public function getPersonById($id)
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

    // create person
    public function store($data)
    {
        if (empty($data['firstName']) ||
            empty($data['lastName']) ||
            empty($data['birthDate']) ||
            empty($data['email']) ||
            empty($data['telephone'])) {
            var_dump($data);
            return false;
        }

        $person = $this->create(
            [
                'id' => 0,
                'firstName' => $data['firstName'],
                'lastName' => $data['lastName'],
                'birthDate' => $data['birthDate'],
                'email' => $data['email'],
                'telephone' => $data['telephone']
            ]
        );

        var_dump($person);

        if ($person) {
            try {
                $statement = $this->connection->prepare(
                    "INSERT INTO {$this->table} (firstName, lastName, birthDate, email, telephone) VALUES (?, ?, ?, ?, ?)"
                );
                $statement->execute([
                    htmlspecialchars($person->__get('firstName')),
                    htmlspecialchars($person->__get('lastName')),
                    htmlspecialchars($person->__get('birthDate')),
                    htmlspecialchars($person->__get('email')),
                    htmlspecialchars($person->__get('telephone'))
                ]);
                return true;
            } catch (PDOException $e) {
                print $e->getMessage();
                return false;
            }
        }
    }

    public function updatePerson($id, $data)
    {
        if (empty($id)) {
            return false;
        }

        try {
            $statement = $this->connection->prepare(
                "UPDATE {$this->table} SET firstName = ?, lastName = ?, birthDate = ?,  email = ?, telephone = ? WHERE id = ?");
            $statement->execute([
                htmlspecialchars($data['firstName']),
                htmlspecialchars($data['lastName']),
                htmlspecialchars($data['birthDate']),
                htmlspecialchars($data['email']),
                htmlspecialchars($data['telephone']),
                htmlspecialchars($id)
            ]);
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function deletePerson($id)
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

    // Instantiate a list of persons
    function createAll($results)
    {
        $productList = array();
        foreach ($results as $result) {
            array_push($productList, $this->create($result));
        }
        return $productList;
    }

    //Instantiate a person
    function create($result)
    {
        return new Person(
            $result['id'],
            $result['firstName'],
            $result['lastName'],
            $result['birthDate'],
            $result['email'],
            $result['telephone']
        );
    }

}