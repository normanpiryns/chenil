<?php

class AnimalDao extends AbstractDao
{

    public function __construct()
    {
        // call parent constructor (AbstractDAO)
        parent::__construct('animals');
    }

    public function getAnimals()
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

    public function getAnimalById($id)
    {

    }

    public function createAnimal($animal)
    {
        if(empty($data['name']) || empty($data['image']) || empty($data['pokemon_id'])) {
            return false;
        }

        $pokemon = $this->create(
            [
                'id'=> 0,
                'name'=> $data['name'],
                'image' => $data['image'],
                'pokemon_id'=> $data['pokemon_id'],
                'user_id' => $data['user_id']
            ]
        );

        if ($pokemon) {
            try {
                $statement = $this->connection->prepare(
                    "INSERT INTO {$this->table} (name, image, pokemon_id, user_id) VALUES (?, ?, ?, ?)"
                );
                $statement->execute([
                    htmlspecialchars($pokemon->__get('name')),
                    htmlspecialchars($pokemon->__get('image')),
                    htmlspecialchars($pokemon->__get('pokemon_id')),
                    htmlspecialchars($pokemon->__get('user'))
                ]);
                return true;
            } catch(PDOException $e) {
                print $e->getMessage();
                return false;
            }
        }
    }

    public function updateAnimal($animal)
    {

    }

    public function deleteAnimal($id)
    {
        if(empty($data['id'])) {
            return false;
        }

        try {
            $statement = $this->connection->prepare("DELETE FROM {$this->table} WHERE id = ?");
            $statement->execute([
                $data['id']
            ]);
        } catch(PDOException $e) {
            print $e->getMessage();
        }
    }

    function createAll ($results) {
        $productList = array();
        foreach ($results as $result) {
            array_push($productList, $this->create($result));
        }
        return $productList;
    }

    function create ($result) {
        return new Animal(
            $result['id'],
            $result['name'],
            $result['race']
        );
    }

}